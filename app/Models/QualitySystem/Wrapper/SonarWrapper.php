<?php

namespace Agilin\Models\QualitySystem\Wrapper;

use Buzz\Client\Curl;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;


abstract class SonarWrapper extends QualityPlatformWrapper {

    protected $client;
    protected $response;

    public function __construct($username, $password, $serverAPI, $client = null, $response = null)
    {
        parent::__construct($username, $password, $serverAPI);
        if ($client != null)
        {
            $this->client = $client;
            $this->response = $response;
        } else
        {
            $this->client = new Curl();
            $this->response = new Response();
        }
    }

    public abstract function getMetricsUrl($projectId, $stringMetrics);

    public abstract function readResponse($response);

    public abstract function transformMetric($metric);

    private function getExternalMetricsWithMetricString($projectId, $stringMetrics)
    {
        $url = $this->getMetricsUrl($projectId, $stringMetrics);

        $request = new Request('GET', $url['resource'], $url['base']);

        $this->client->setVerifyPeer(false);

        $this->client->send($request, $this->response);
        $result = $this->response->getContent();
        if (str_contains($result, 'error'))
        {
            $e = new ServiceUnavailableHttpException(null, $result);
            throw $e;
        }
        return $this->transformCollection($this->readResponse($result));

    }

    public function getExternalMetrics($projectId, $metricCodes)
    {
        $stringMetrics = $metricCodes->implode('code', ',');
        return $this->getExternalMetricsWithMetricString($projectId, $stringMetrics);
    }


    public function transformCollection(array $metrics)
    {
        $result = array();
        $temporal = array_map([$this, 'transformMetric'], $metrics);
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