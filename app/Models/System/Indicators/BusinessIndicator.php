<?php

namespace Agilin\Models\System\Indicators;

use Agilin\Models\System\Application;
use Agilin\Models\QualitySystems\Metrics\Metric;
use Agilin\Models\QualitySystems\Metrics\MetricRepository;
use Carbon\Carbon;
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
        $value =  JsonLogic::apply(json_decode($this->calculation_rule), json_decode($data));
        $this->saveIndicator($application, $value);
        return $value;
    }

    public function saveIndicator(Application $application, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        $pivot = $this->applications()->where('application_id', $application->id)->wherePivot('registered_date',$date)->get();
        if($pivot->count() > 0){
            $this->applications()->where('application_id', $application->id)->wherePivot('registered_date',$date)->updateExistingPivot($application->id, ['value' => $value, 'registered_date' => $date]);
        }else{
            $this->applications()->save($application, ['value' => $value, 'registered_date' => $date]);
        }

    }

    public function applications()
    {
        return $this->belongsToMany('Agilin\Models\System\Application', 'indicator_instance')->withPivot('value','registered_date');
    }
}
