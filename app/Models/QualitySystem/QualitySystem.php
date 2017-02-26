<?php

namespace Agilin\Models\QualitySystem;

use Illuminate\Database\Eloquent\Model;

class QualitySystem extends Model {

    protected $table = 'quality_system';
    public $timestamps = false;

    public function externalMetrics()
    {
        return $this->hasMany('Agilin\Models\QualitySystem\Metric\ExternalMetric')->orderBy('level');
    }
}
