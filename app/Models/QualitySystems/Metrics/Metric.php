<?php

namespace Agilin\Models\QualitySystems\Metrics;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model {

    protected $table = 'metric';
    protected $appends = ['value'];
    public $timestamps = false;

    public function getValueAttribute()
    {
        $result = null;
        if (isset($this->attributes['value']))
        {
            $result = $this->attributes['value'];
        }
        return $result;
    }
}
