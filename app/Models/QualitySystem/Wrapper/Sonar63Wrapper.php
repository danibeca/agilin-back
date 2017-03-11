<?php

namespace Agilin\Models\QualitySystem\Wrapper;

use Illuminate\Support\Facades\Log;

class Sonar63Wrapper extends SonarWrapper {

    public function getMetricsTypeOneUrl($projectId, $stringMetrics)
    {
        $result['base'] = $this->serverAPI;
        $result['resource'] = '/measures/component?componentKey=' . $projectId . '&metricKeys=' . $stringMetrics;
        return $result;
    }

    public function readMetricsTypeOneResponse($response)
    {
        return json_decode($response, true)['component']['measures'];
    }

    public function transformMetricTypeOne($metric)
    {
        return [
            $metric['metric'] => $metric['value']
        ];
    }

}