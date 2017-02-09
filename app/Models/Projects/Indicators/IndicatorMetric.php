<?php

namespace Agilin\Models\Projects\Indicators;

use Illuminate\Database\Eloquent\Model;

class IndicatorMetric extends Model {

    protected $table = 'indicator_metric';
    protected $appends = ['value'];
    public $timestamps = false;

    public function externalMetric()
    {
        return $this->belongsTo('Agilin\Models\QualitySystems\Metrics\ExternalMetric');
    }

    public function calculate()
    {
        $calculator = new $this->calculator_class();
        return $calculator->calculate($this);
    }

    public function getBussinesMapValue()
    {
        $value = str_replace(',','.',$this->externalMetric->value);
        $result = BusinessMapValue::where('indicator_metric_id', $this->id)
            ->where('lowest_value', '<=', $value)
            ->where('highest_value', '>', $value)->first();
        if(!isset($result)){
            $result = BusinessMapValue::where('indicator_metric_id', $this->id)
                                      ->min('business_value');
        }
        return $result['business_value'];
    }

    public function getValueAttribute()
    {
        $result = null;
        if (isset($this->attributes['value']))
        {
            $result = $this->attributes['value'];
        }
        return $result;
    }

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = $value;
    }

}
