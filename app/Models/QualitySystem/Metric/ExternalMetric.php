<?php

namespace Agilin\Models\QualitySystem\Metric;

use Agilin\Utils\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use JWadhams\JsonLogic;

class ExternalMetric extends Model {

    protected $table = 'external_metric';
    protected $appends = ['value'];
    public $timestamps = false;

    use AttributeValue;

    public function metric()
    {
        return $this->belongsTo('Agilin\Models\QualitySystem\Metric\Metric');
    }

    public function normalize($extenalMetrics)
    {
        $data = $this->normalization_data;
        foreach (json_decode($data) as $key => $attribute)
        {
            if (substr($key, 0, 5) === "@this")
            {
                $data = str_replace($key . ".value", $this->value, $data);
            }
            if (substr($key, 0, 5) === "@ext_")
            {
                $metric_value = $extenalMetrics->where('code', substr($key, 5, strlen($key)))->first()->value;
                $data = str_replace($key . ".value", $metric_value, $data);
            }
        }
        $this->value = JsonLogic::apply(json_decode($this->normalization_rule), json_decode($data));
    }
}
