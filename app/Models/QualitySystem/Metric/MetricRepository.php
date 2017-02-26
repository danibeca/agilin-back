<?php


namespace Agilin\Models\QualitySystem\Metric;




use Agilin\Models\Application\Application;
use Illuminate\Support\Facades\Log;

class MetricRepository {

    public function getMetricValue(Application $application, Metric $metric)
    {
        $result = 0;
        $repo = $this->getRepo();
        if (isset($repo[$metric->id . '@' . $application->id]))
        {
            Log::info($metric->id . '@' . $application->id);
            $result = $repo[$metric->id . '@' . $application->id];
        } else
        {
            Log::info('ServerMETRIC'.$metric->id);
            Log::info('ServerAPP'.$application->id);
            Log::info('Server'.$metric->id . '--' . $application->id);
            $result = $this->getMetricValueFromServer($application, $metric);
        }
        return $result;
    }

    public function getMetricValueFromServer(Application $application, Metric $metric)
    {

        $repo = $this->getRepoUpdated($application);
        return $repo[$metric->id . '@' . $application->id];
    }

    public function getRepoUpdated(Application $application)
    {

        return $this->updateRepo($this->getAllMetricFromServer($application), $application);
    }

    public function getAllMetricFromServer(Application $application)
    {
        $qaSystem = $application->qualitySystem->first();
        $wrapper = new $qaSystem->wrapper_class($qaSystem->pivot->username, $qaSystem->pivot->password, $qaSystem->pivot->api_server_url);
        $externalMetrics = $qaSystem->externalMetrics;
        $externalMetricValues = $wrapper->getExternalMetrics($qaSystem->pivot->app_code, $externalMetrics);
        return $this->assignExternalMetricValues($externalMetrics, $externalMetricValues);
    }

    public function assignExternalMetricValues($externalMetrics, $externalMetricValues)
    {
        foreach ($externalMetrics as $externalMetric)
        {
            if (isset($externalMetricValues[$externalMetric->code]))
            {
                $externalMetric->value = $externalMetricValues[$externalMetric->code];
            } else
            {
                $externalMetric->value = 0;
            }
            $externalMetric->normalize($externalMetrics);
        }
        return $externalMetrics;
    }

    public function getRepo()
    {
        return session('metricRepository', array());
    }

    public function updateRepo($externalMetricsNormalized, Application $application)
    {
        $repo = $this->getRepo();
        foreach ($externalMetricsNormalized as $externalMetric)
        {
            $repo[$externalMetric->metric->id . '@' . $application->id] = $externalMetric->value;
        }
        session(['metricRepository' => $repo]);
        return $repo;
    }
}