<?php

namespace Agilin\Models\System;

use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Utils\Models\AttributeValue;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use JWadhams\JsonLogic;


class SystemIndicator extends Model {

    protected $table = 'system_indicator';
    protected $appends = ['value'];
    protected $systemIdField = 'system_id';
    protected $valueField = 'value';
    protected $registeredDateField = 'registered_date';
    public $timestamps = false;

    use AttributeValue;

    public function systems()
    {
        return $this->belongsToMany('Agilin\Models\System\System', 'system_has_indicator')->withPivot($this->valueField, $this->registeredDateField);
    }

    public function calculate(System $system)
    {
        $date = Carbon::now()->format('Y-m-d');
        $result = 0;
        if ($this->hasRecordOnDate($system, $date) && ! session('cronRun', false))
        {
            $result = $this->calculateFromDB($system, $date);
        } else
        {
            $result = $this->calculateFromApplications($system);
        }
        $this->value = $result;
        return $result;
    }

    public function calculateFromDB(System $system, $date)
    {
        return $this->systems()
            ->where($this->systemIdField, $system->id)
            ->wherePivot($this->registeredDateField, $date)
            ->get()->first()
            ->pivot->value;
    }

    public function calculateFromApplications(System $system)
    {
        $data = $this->calculation_data;

        foreach (json_decode($data) as $key => $attribute)
        {

            if (str_contains($key,'@appsInd_'))
            {
                $applicationIndicator = $this->getDependencyByKey($key);
                $data = str_replace($key . '.value', $this->summarizeApplicationIndicator($system, $applicationIndicator), $data);
            }
        }
        $value = JsonLogic::apply(json_decode($this->calculation_rule), json_decode($data));
        $this->saveIndicator($system, $value);
        return $value;
    }

    public function summarizeApplicationIndicator(System $system, ApplicationIndicator $applicationIndicator)
    {
        $result = 0;
        $counter = 0;
        foreach ($system->applications as $application)
        {
            $counter++;
            $result += $applicationIndicator->calculate($application);
        }
        if ($counter > 0)
        {
            $result /= $counter;
        }
        return $result;
    }

    public function getDependencyByKey($key)
    {
        return ApplicationIndicator::where('code', substr($key, 9, strlen($key)))->first();
    }

    public function saveIndicator(System $system, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        $pivot = $this->systems()->where($this->systemIdField, $system->id)->wherePivot($this->registeredDateField, $date)->get();
        if ($pivot->count() > 0)
        {
            $this->systems()
                ->where($this->systemIdField, $system->id)
                ->wherePivot($this->registeredDateField, $date)
                ->updateExistingPivot($system->id, [$this->valueField => $value, $this->registeredDateField => $date]);
        } else
        {
            $this->systems()->save($system, [$this->valueField => $value, $this->registeredDateField => $date]);
        }
    }

    public function hasRecordOnDate(System $system, $date)
    {
        $pivot = $this->systems()->where($this->systemIdField, $system->id)
            ->wherePivot($this->registeredDateField, $date)->get();
        return ($pivot->count() > 0);
    }
}
