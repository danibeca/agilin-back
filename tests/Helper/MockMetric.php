<?php
namespace Tests\Helper;

use Agilin\Models\QualitySystem\Metric\ExternalMetric;
use Agilin\Models\QualitySystem\Metric\Metric;

class MockMetric {

    public static function getMetric($code)
    {
        $metric = factory(Metric::class)->make();
        $metric->code = $code;
        return $metric;
    }
}