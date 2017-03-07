<?php

namespace Agilin\Models\Application;

use Agilin\Models\QualitySystem\Metric\Metric;
use Agilin\Models\QualitySystem\Metric\MetricRepository;
use Agilin\Utils\Models\AttributeValue;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use JWadhams\JsonLogic;

class ApplicationIndicator extends Model {

    protected $table = 'application_indicator';
    protected $appends = ['value'];
    protected $metricRepository;
    public $timestamps = false;

    use AttributeValue;

    public function applications()
    {
        return $this->belongsToMany('Agilin\Models\Application\Application', 'application_has_indicator')->withPivot('value', 'registered_date');
    }

    public function calculate(Application $application)
    {
        $date = Carbon::now()->format('Y-m-d');
        $result = 0;
        if ($this->hasRecordOnDate($application, $date) && ! session('cronRun', false))
        {
            $result = $this->calculateFromDB($application, $date);
        } else
        {
            $result = $this->calculateFromRepository($application);
        }
        $this->value = $result;
        return $result;
    }

    public function calculateFromDB(Application $application, $date)
    {
        return $this->applications()
            ->where('application_id', $application->id)
            ->wherePivot('registered_date', $date)
            ->get()->first()
            ->pivot->value;
    }

    public function calculateFromRepository(Application $application)
    {
        $data = $this->calculation_data;

        if ($this->metricRepository == null)
        {
            $this->metricRepository = new MetricRepository();
        }

        foreach (json_decode($data) as $key => $attribute)
        {
            if (substr($key, 0, 5) === "@ind_")
            {
                $subIndicator = $this->getDependencyByKey($key);
                $data = str_replace($key . ".value", $subIndicator->calculate($application), $data);
            }
            if (substr($key, 0, 5) === "@met_")
            {
                $metric = Metric::where('code', substr($key, 5, strlen($key)))->first();
                $data = str_replace($key . ".value", $this->metricRepository->getMetricValue($application, $metric), $data);
            }
        }
        $value = JsonLogic::apply(json_decode($this->calculation_rule), json_decode($data));
        $this->saveIndicator($application, $value);
        return $value;
    }

    public function saveIndicator(Application $application, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        if ($this->hasRecordOnDate($application, $date))
        {
            $this->applications()->where('application_id', $application->id)
                ->wherePivot('registered_date', $date)
                ->updateExistingPivot($application->id, ['value' => $value, 'registered_date' => $date]);
        } else
        {
            $this->applications()->save($application, ['value' => $value, 'registered_date' => $date]);
        }
    }

    public function hasRecordOnDate(Application $application, $date)
    {
        $pivot = $this->applications()->where('application_id', $application->id)->wherePivot('registered_date', $date)->get();
        return ($pivot->count() > 0);
    }

    public function setMetricRepository($metricRepository)
    {
        $this->metricRepository = $metricRepository;
    }

    public function getDependencyByKey($key)
    {
        return ApplicationIndicator::where('code', substr($key, 5, strlen($key)))->first();
    }
}
