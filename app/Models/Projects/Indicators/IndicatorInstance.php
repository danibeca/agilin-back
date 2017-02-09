<?php

namespace Agilin\Models\Projects\Indicators;

use Illuminate\Database\Eloquent\Model;

class IndicatorInstance extends Model {

    protected $table = 'indicator_instance';
    public $timestamps = false;

    public function businessIndicator()
    {
        return $this->belongsTo('Agilin\Models\Projects\Indicators\BusinessIndicator');
    }

    public function indicatorMetrics()
    {
        return $this->hasMany('Agilin\Models\Projects\Indicators\IndicatorMetric')->with('externalMetric');
    }

    public function calculate()
    {
        $calculator = new $this->calculator_class();
        return $calculator->calculate($this);
    }

}
