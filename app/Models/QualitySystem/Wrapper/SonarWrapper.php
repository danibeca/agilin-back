<?php

namespace Agilin\Models\QualitySystem\Wrapper;


use Agilin\Models\Application\Application;
use Agilin\Models\Application\Issue;
use Agilin\Models\Application\IssueImpact;
use Agilin\Models\Application\IssueRule;
use Agilin\Models\Application\IssueTag;
use Agilin\Models\Application\IssueType;
use Buzz\Client\Curl;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;


abstract class SonarWrapper extends QualityPlatformWrapper
{

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

        return collect($resultMetrics)->mapWithKeys(function ($item) {
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

        if (! empty($this->username))
        {
            $request->addHeader('Authorization: Basic ' . base64_encode($this->username . ':' . $this->password));
        }
        $this->client->setVerifyPeer(false);
        $this->client->setTimeout(1000);

        $this->client->send($request, $this->response);
        $result = $this->response->getContent();
        if (! $this->response->isOk())
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
            /** @noinspection ForeachSourceInspection */
            foreach ($this->getExternalMetricsTypeTwoRequest($projectId, $extMetricTypeTwo) as $key => $value)
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


    public function getOpenIssues(Application $application, $projectId)
    {

        $pages = $this->readNumberOfPages($this->request(
            $this->getOpenIssuesURL($projectId)));

        $pages = ($pages > 0) ? $pages : 1;
        for ($i = 1; $i <= $pages; $i++)
        {
            $result = $this->readIssuesResponse($application,
                $this->request(
                    $this->getOpenIssuesURL($projectId, $i)));
        }
    }

    public function readIssuesResponse(Application $application, $response)
    {

        foreach ((array) json_decode($response, true)['issues'] as $issue)
        {
            $internalIssue = new Issue();

            $ef = '9min';
            if(isset($issue['effort'])){
                $ef = $issue['effort'];
            }
            $internalIssue->effortText = $ef;
            $internalIssue->effort = $this->getEffortInMinute($ef);
            $internalIssue->last = true;
            $internalIssue->application_id = $application->id;
            $internalIssue->type()->associate(IssueType::whereName($issue['type'])->first());
            $internalIssue->impact()->associate(IssueImpact::whereName($issue['severity'])->first());
            $internalIssue->message = $issue['message'];
            if ( ! $newRule = IssueRule::whereName($issue['rule'])->get()->first()){
                $newRule = new  IssueRule();
                $newRule->name = $issue['rule'];
                $newRule->save();
            }
            $internalIssue->rule()->associate($newRule);
            $internalIssue->save();




            foreach ($issue['tags'] as $tag){
                if ( ! $newTag = IssueTag::whereName($tag)->get()->first()){
                    $newTag = new  IssueTag();
                    $newTag->name = $tag;
                    $newTag->save();
                }
                $internalIssue->tags()->attach($newTag->id);
            }

        }
    }

    public function getEffortInMinute($timeString){
        preg_match("/(?:(\d+)d)?(?:(\d+)h)?(?:(\d+)m?)?/",$timeString,$regx_time);
        isset($regx_time[1]) || $regx_time[1] = 0;
        isset($regx_time[2]) || $regx_time[2] = 0;
        isset($regx_time[3]) || $regx_time[3] = 0;
        return (int)$regx_time[1]*24*60 + (int)$regx_time[2]*60 + (int)$regx_time[3];

    }


    public function getOpenIssuesURL($projectId, $page = 1)
    {
        $result['base'] = $this->serverAPI;
        $result['resource'] = '/issues/search?componentKeys=' . $projectId . '&statuses=OPEN,REOPENED&p=' . $page;

        return $result;
    }
}
