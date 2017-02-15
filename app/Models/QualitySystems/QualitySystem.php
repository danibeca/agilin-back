<?php

namespace Agilin\Models\QualitySystems;

use Illuminate\Database\Eloquent\Model;

class QualitySystem extends Model {

    protected $table = 'quality_system';
    public $timestamps = false;

    public function externalMetrics()
    {
        return $this->hasMany('Agilin\Models\QualitySystems\Metrics\ExternalMetric')->orderBy('level');
    }
}
