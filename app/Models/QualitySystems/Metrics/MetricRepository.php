<?php


namespace Agilin\Models\QualitySystems\Metrics;


use Agilin\Models\Projects\Project;

class MetricRepository {

    public function getMetricValue(Project $project, Metric $metric)
    {
        $result = 0;
        $repo = $this->getRepo();
        if (isset($repo[$metric->id . '@' . $project->id]))
        {
            $result = $repo[$metric->id . '@' . $project->id];
        } else
        {
            $result = $this->getMetricValueFromServer($project, $metric);
        }
        return $result;
    }

    public function getMetricValueFromServer(Project $project, Metric $metric)
    {
        $repo = $this->getRepoUpdated($project);
        return $repo[$metric->id . '@' . $project->id];
    }

    public function getRepoUpdated(Project $project)
    {
        return $this->updateRepo($this->getAllMetricFromServer($project), $project);
    }

    public function getAllMetricFromServer(Project $project)
    {
        $qaSystem = $project->qualitySystem->first();
        $wrapper = new $qaSystem->wrapper_class($qaSystem->username, $qaSystem->password, $qaSystem->pivot->api_server_url);
        $externalMetrics = $qaSystem->externalMetrics;
        $externalMetricValues = $wrapper->getExternalMetrics($project->name, $externalMetrics);
        $externalMetricsNormalized = $this->assignExternalMetricValues($externalMetrics, $externalMetricValues);

        return $externalMetricsNormalized;
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

    public function updateRepo($externalMetricsNormalized, Project $project)
    {
        $repo = $this->getRepo();
        foreach ($externalMetricsNormalized as $externalMetric)
        {
            $repo[$externalMetric->metric->id . '@' . $project->id] = $externalMetric->value;
        }
        session(['metricRepository' => $repo]);
        return $repo;
    }
}