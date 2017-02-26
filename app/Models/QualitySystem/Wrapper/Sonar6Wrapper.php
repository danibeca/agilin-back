<?php

namespace Agilin\Models\QualitySystem\Wrapper;

use Buzz\Client\Curl;
use Buzz\Message\Request;
use Buzz\Message\Response;

class Sonar6Wrapper extends QualityPlatformWrapper {

    private function getExternalMetricsWithMetricString($projectId, $stringMetrics)
    {
        $url = $this->serverAPI . '/resources?resource=' . $projectId . '&metrics=' . $stringMetrics;

        $request = new Request('GET', '/', $url);
        $response = new Response();

        $client = new Curl();
        $client->setVerifyPeer(false);
        $client->send($request, $response);

        return $this->transformCollection(json_decode($response->getContent(), true)[0]['msr']);

    }

    public function getExternalMetrics($projectId, $metricCodes)
    {
        $stringMetrics = $metricCodes->implode('code', ',') . ',';
        return $this->getExternalMetricsWithMetricString($projectId, $stringMetrics);
    }

    public function transformMetric($metric)
    {
        return [
            $metric['key'] => $metric['val']
        ];
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