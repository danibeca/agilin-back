<?php

namespace Agilin\Models\QualitySystems;

use Illuminate\Database\Eloquent\Model;

class QualitySystem extends Model {

    protected $table = 'quality_system';
    public $timestamps = false;

    public function indicatorInstances()
    {
        return $this->hasMany('Agilin\Models\Projects\Indicators\IndicatorInstance');
    }
}
