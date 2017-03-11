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

    public function normalize($externalMetrics)
    {
        $data = $this->normalization_data;
        foreach (json_decode($data) as $key => $attribute)
        {
            if (str_contains($key,'@this'))
            {
                $data = str_replace($key . '.value', $this->value, $data);
            }
            if (str_contains($key,'@ext_'))
            {
                $metric_value = $externalMetrics->where('code', substr($key, 5, strlen($key)))->first()->value;
                $data = str_replace($key . '.value', $metric_value, $data);
            }
        }
        $this->value = JsonLogic::apply(json_decode($this->normalization_rule), json_decode($data));
    }
}
