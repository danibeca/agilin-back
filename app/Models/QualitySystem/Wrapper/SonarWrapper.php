<?php

namespace Agilin\Models\QualitySystem\Wrapper;

use Buzz\Client\Curl;
use Buzz\Message\Request;
use Buzz\Message\Response;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;

abstract class SonarWrapper extends QualityPlatformWrapper {

    public function __construct($username, $password, $serverAPI)
    {
        parent::__construct($username, $password, $serverAPI);
    }

    public abstract function getMetricsUrl($projectId, $stringMetrics);
    public abstract function readResponse($response);
    public abstract function transformMetric($metric);

    private function getExternalMetricsWithMetricString($projectId, $stringMetrics)
    {
        $url = $this->getMetricsUrl($projectId, $stringMetrics);

        $request = new Request('GET', $url['resource'], $url['base']);
        $response = new Response();

        $client = new Curl();
        $client->setVerifyPeer(false);

        $client->send($request, $response);
        $result = $response->getContent();
        if(str_contains($result, 'error')){
            $e = new ServiceUnavailableHttpException(null,$result);
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