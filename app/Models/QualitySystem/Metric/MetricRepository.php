<?php


namespace Agilin\Models\QualitySystem\Metric;


use Agilin\Models\Application\Application;
use Illuminate\Support\Facades\Log;

class MetricRepository {

    protected $wrapperServerMetrics;

    public function __construct($wrapperServerMetrics = null)
    {
        if ($wrapperServerMetrics != null)
        {
            $this->wrapperServerMetrics = $wrapperServerMetrics;
        }
    }


    public function getMetricValue(Application $application, Metric $metric)
    {
        $result = 0;
        $repo = $this->getRepo();
        if (isset($repo[$metric->id . '@' . $application->id]))
        {
            $result = $repo[$metric->id . '@' . $application->id];
        } else
        {
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

    public function getAllMetricFromServer(Application $application, $appCode = null)
    {
        $qaSystem = $application->qualitySystem->first();
        if ($this->wrapperServerMetrics == null)
        {
            $this->wrapperServerMetrics = new $qaSystem->wrapper_class($qaSystem->pivot->username, $qaSystem->pivot->password, $qaSystem->pivot->api_server_url);
            $appCode = $qaSystem->pivot->app_code;
        }
        $externalMetrics = $qaSystem->externalMetrics;
        $externalMetricValues = $this->wrapperServerMetrics->getExternalMetrics($appCode, $externalMetrics);
        return $this->assignExternalMetricValues($externalMetrics, $externalMetricValues);
    }

    public function assignExternalMetricValues($externalMetrics, $externalMetricValues)
    {
        foreach ($externalMetrics->sortBy('level') as $externalMetric)
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