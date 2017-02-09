<?php

namespace Agilin\Models\QualitySystems\Metrics;

use Illuminate\Database\Eloquent\Model;

class ExternalMetric extends Model {

    protected $table = 'external_metric';
    protected $appends = ['value','project_lines'];
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

    public function getProjectLinesAttribute()
    {
        $result = null;
        if (isset($this->attributes['project_lines']))
        {
            $result = $this->attributes['project_lines'];
        }
        return $result;
    }
}
