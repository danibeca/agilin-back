<?php

namespace Agilin\Models\QualitySystem\Wrapper;


use Buzz\Client\Curl;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;


abstract class SonarWrapper extends QualityPlatformWrapper {

    protected $client;
    protected $response;
    protected $searchMetrics = 'searchMetrics';
    protected $issueMetrics = 'issueMetrics';

    public function __construct($username, $password, $serverAPI, $client = null, $response = null)
    {
        parent::__construct($username, $password, $serverAPI);
        if ($client !== null)
        {
            $this->client = $client;
            $this->response = $response;
        } else
        {
            $this->client = new Curl();
            $this->response = new Response();
        }
    }

    public abstract function getMetricsTypeOneUrl($projectId, $stringMetrics);

    public abstract function readMetricsTypeOneResponse($response);

    public abstract function transformMetricTypeOne($metric);

    public function getExternalMetricsTypeOneRequest($projectId, $stringMetrics)
    {
        return $this->transformCollection(
            $this->readMetricsTypeOneResponse(
                $this->request(
                    $this->getMetricsTypeOneUrl($projectId, $stringMetrics))));

    }

    public function getMetricsTypeTwoUrl($projectId, $page = 1)
    {
        $result['base'] = $this->serverAPI;
        $result['resource'] = '/issues/search?componentKeys=' . $projectId . '&statuses=OPEN,REOPENED&p=' . $page;
        return $result;
    }

    public function readNumberOfPages($response)
    {
        $paging = json_decode($response, true)['paging'];
        return ceil($paging['total'] / $paging['pageSize']);
    }

    public function getTypeTwoMetricByPattern(Collection $externalMetrics)
    {
        $searchMetricsArray = array();
        $issueMetricsArray = array();
        foreach ($externalMetrics as $metric)
        {
            $arrayPattern = json_decode($metric->pattern, true);
            $metric->pattern = $arrayPattern;
            if (isset($arrayPattern['search']))
            {
                $searchMetricsArray[] = $metric;
            } else
            {
                $issueMetricsArray[] = $metric;
            }
        }
        return array($this->searchMetrics => $searchMetricsArray, $this->issueMetrics => $issueMetricsArray);
    }

    public function readIssueMetrics($issue, $externalMetrics)
    {
        foreach ((array) $externalMetrics[$this->issueMetrics] as $issueMetric)
        {
            if ($issueMetric->value === null)
            {
                $issueMetric->value = 0;
            }

            $comp = array_intersect_assoc($issue, $issueMetric->pattern);
            if (count($issueMetric->pattern) <= count($comp))
            {
                ++$issueMetric->value;
            }
        }
    }

    public function readSearchMetrics($issue, $externalMetrics)
    {
        foreach ((array) $externalMetrics[$this->searchMetrics] as $searchMetric)
        {
            if ($searchMetric->value === null)
            {
                $searchMetric->value = 0;
            }

            if (in_array($searchMetric->pattern['value'], $issue[$searchMetric->pattern['search']], true))
            {
                ++$searchMetric->value;
            }
        }
    }

    public function getTransformReadMetrics($externalMetrics)
    {
        $resultMetrics = $externalMetrics[$this->issueMetrics];
        foreach ((array) $externalMetrics[$this->searchMetrics] as $searchMetric)
        {
            $resultMetrics[] = $searchMetric;
        }
        return collect($resultMetrics)->mapWithKeys(function ($item)
        {
            return [$item['code'] => $item['value']];
        });
    }

    public function readMetricsTypeTwoResponse($response, $externalMetrics)
    {
        foreach ((array) json_decode($response, true)['issues'] as $issue)
        {
            $this->readIssueMetrics($issue, $externalMetrics);
            $this->readSearchMetrics($issue, $externalMetrics);
        }

        return $this->getTransformReadMetrics($externalMetrics);
    }


    public function getExternalMetricsTypeTwoRequest($projectId, $extMetricTypeTwo)
    {
        $pages = $this->readNumberOfPages($this->request(
            $this->getMetricsTypeTwoUrl($projectId)));
        $result = null;

        $typeTwoMetrics = $this->getTypeTwoMetricByPattern($extMetricTypeTwo);
        $pages = ($pages > 0) ? $pages : 1;
        for ($i = 1; $i <= $pages; $i++)
        {
            $result = $this->readMetricsTypeTwoResponse(
                $this->request(
                    $this->getMetricsTypeTwoUrl($projectId, $i)), $typeTwoMetrics);
        }
        return $result;
    }

    public function request($url)
    {
        $request = new Request('GET', $url['resource'], $url['base']);
        $this->client->setVerifyPeer(false);
        $this->client->setTimeout(1000);

        $this->client->send($request, $this->response);
        $result = $this->response->getContent();
        if ( ! $this->response->isOk())
        {
            throw new ServiceUnavailableHttpException(null, $result);
        }
        return $result;
    }

    public function getExternalMetrics($projectId, Collection $externalMetrics)
    {
        $result = array();
        $extMetricTypeOne = $externalMetrics->where('type', 1);

        if ($extMetricTypeOne->count() > 0)
        {
            $stringMetrics = $extMetricTypeOne->implode('code', ',');
            $result = $this->getExternalMetricsTypeOneRequest($projectId, $stringMetrics);

        }
        $extMetricTypeTwo = $externalMetrics->where('type', 2);
        if ($extMetricTypeTwo->count() > 0)
        {
            foreach ((array) $this->getExternalMetricsTypeTwoRequest($projectId, $extMetricTypeTwo) as $key => $value)
            {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    public function transformCollection(array $metrics)
    {
        $result = array();
        $temporal = array_map([$this, 'transformMetricTypeOne'], $metrics);
        foreach ($temporal as $v)
        {
            foreach ((array) $v as $k2 => $v2)
            {
                $result[$k2] = $v2;
            }
        }
        return $result;
    }
}