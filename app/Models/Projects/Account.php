<?php

namespace Agilin\Models\Projects;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'account';
    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany('Agilin\Models\Projects\Project')->with('qualitySystem');
    }

    public function calculateAccountIndicator()
    {
        $result = 0;
        foreach ($this->projects as $project)
        {
            $qaSystem = $project->qualitySystem->first();
            $indicatorInstance = $qaSystem->indicatorInstances->first();
            $externalMetrics = $indicatorInstance->indicatorMetrics->pluck('externalMetric');

            $wrapper = new $qaSystem->wrapper_class($qaSystem->username, $qaSystem->password, $qaSystem->pivot->api_server_url);
            $externalMetricInstances = $wrapper->getExternalMetrics($project->name, $externalMetrics);
            $projectLines = $wrapper->getProjectNumberOfLines($project->name);

            foreach ($indicatorInstance->indicatorMetrics as $indicatorMetric)
            {
                $indicatorMetric->externalMetric->project_lines = $projectLines;
                $value = $externalMetricInstances[$indicatorMetric->externalMetric->code];
                if (isset($value))
                {
                    $indicatorMetric->externalMetric->value = $value;
                }
            }

            $result += $indicatorInstance->calculate();
        }

        return $result / count($this->projects);

    }

}
