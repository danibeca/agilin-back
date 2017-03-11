<?php

namespace Agilin\Models\QualitySystem\Wrapper;

use Agilin\Models\QualitySystem\Metric\ExternalMetric;
use Buzz\Client\Curl;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;


abstract class SonarWrapper extends QualityPlatformWrapper {

    protected $client;
    protected $response;

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

    public function getMetricsTypeTwoUrl($projectId)
    {
        $result['base'] = $this->serverAPI;
        $result['resource'] = '/issues/search?componentKeys=' . $projectId . '&statuses=OPEN,REOPENED';
        return $result;
    }

    public function readMetricsTypeTwoResponse($response, $extMetrics)
    {
        $searchMetrics = array();
        $issueMetrics = array();
        foreach ($extMetrics as $metric)
        {
            $arrayPattern = json_decode($metric->pattern, true);
            $metric->pattern = $arrayPattern;
            if (isset($arrayPattern['search']))
            {
               $searchMetrics[] = $metric;
            } else
            {
                $issueMetrics[] = $metric;
            }
        }

        foreach (json_decode($response, true)['issues'] as $issue)
        {
            foreach ($issueMetrics as $issueMetric)
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
            foreach ($searchMetrics as $searchMetric)
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
        $resultMetrics = $issueMetrics;
        foreach ($searchMetrics as $searchMetric)
        {
            $resultMetrics[] = $searchMetric;
        }
        return collect($resultMetrics)->mapWithKeys(function ($item)
        {
            return [$item['code'] => $item['value']];
        });
    }


    public function getExternalMetricsTypeTwoRequest($projectId, $extMetricTypeTwo)
    {
        return $this->readMetricsTypeTwoResponse(
            $this->request(
                $this->getMetricsTypeTwoUrl($projectId)), $extMetricTypeTwo);
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

    public function getExternalMetrics($projectId, $externalMetrics)
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
            $result2 = $this->getExternalMetricsTypeTwoRequest($projectId, $extMetricTypeTwo);
            foreach ($result2 as $key => $value)
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
            foreach ($v as $k2 => $v2)
            {
                $result[$k2] = $v2;
            }
        }
        return $result;
    }
}