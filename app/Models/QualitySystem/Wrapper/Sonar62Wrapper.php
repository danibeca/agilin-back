<?php

namespace Agilin\Models\QualitySystem\Wrapper;


class Sonar62Wrapper extends SonarWrapper {

    public function getMetricsTypeOneUrl($projectId, $stringMetrics)
    {
        $result['base'] = $this->serverAPI;
        $result['resource'] = '/resources?resource=' . $projectId . '&metrics=' . $stringMetrics;

        return  $result;
    }

    public function readMetricsTypeOneResponse($response)
    {
        return json_decode($response, true)[0]['msr'];
    }

    public function transformMetricTypeOne($metric)
    {
        return [
            $metric['key'] => $metric['val']
        ];
    }

}