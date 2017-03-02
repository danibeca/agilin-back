<?php

namespace Agilin\Models\QualitySystem\Wrapper;


class Sonar62Wrapper extends SonarWrapper {

    public function getMetricsUrl($projectId, $stringMetrics)
    {
        $result['base'] = $this->serverAPI;
        $result['resource'] = '/resources?resource=' . $projectId . '&metrics=' . $stringMetrics;

        return  $result;
    }

    public function readResponse($response)
    {
        return json_decode($response, true)[0]['msr'];
    }

    public function transformMetric($metric)
    {
        return [
            $metric['key'] => $metric['val']
        ];
    }
}