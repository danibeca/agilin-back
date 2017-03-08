<?php

namespace Agilin\Models\QualitySystem\Metric;

use Agilin\Utils\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model {

    protected $table = 'metric';
    protected $appends = ['value'];
    public $timestamps = false;

    use AttributeValue;
}
