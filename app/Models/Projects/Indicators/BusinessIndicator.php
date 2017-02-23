<?php

namespace Agilin\Models\Projects\Indicators;

use Agilin\Models\Projects\Application;
use Agilin\Models\QualitySystems\Metrics\Metric;
use Agilin\Models\QualitySystems\Metrics\MetricRepository;
use Illuminate\Database\Eloquent\Model;
use JWadhams\JsonLogic;

class BusinessIndicator extends Model {

    protected $table = 'business_indicator';
    public $timestamps = false;

    public function calculate(Application $application)
    {
        $data = $this->calculation_data;
        $metricRepository = new MetricRepository();
        foreach (json_decode($data) as $key => $attribute)
        {
            if (substr($key, 0, 5) === "@ind_")
            {
                $subIndicator = BusinessIndicator::where('code', substr($key, 5, strlen($key)))->first();
                $data = str_replace($key . ".value", $subIndicator->calculate($application), $data);
            }
            if (substr($key, 0, 5) === "@met_")
            {
                $metric = Metric::where('code', substr($key, 5, strlen($key)))->first();
                $data = str_replace($key . ".value", $metricRepository->getMetricValue($application, $metric), $data);
            }
        }
        return JsonLogic::apply(json_decode($this->calculation_rule), json_decode($data));
    }

    public function applications()
    {
        return $this->belongsToMany('Agilin\Models\Projects\Application', 'indicator_instance');
    }
}
