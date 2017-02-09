<?php

namespace Agilin\Models\QualitySystems\Wrappers;

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

    public function getProjectNumberOfLines($projectId){
        return $this->getExternalMetricsWithMetricString($projectId, 'lines,')['lines'];
    }




    public function getStandardMetricName($key)
    {
        $metricNameMap = array(
            "duplicated_lines_density" => QualityPlatformWrapper::$DUPLICATELINES,
            "sqale_index" => QualityPlatformWrapper::$TECHNICALDEBTTIME,
            "function_complexity" => QualityPlatformWrapper::$FUNCTIONCOMPLEXITY
        );
        return $metricNameMap[$key];
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