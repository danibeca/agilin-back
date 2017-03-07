<?php


namespace Tests\Unit\QualitySystem\Metric;

use Agilin\Models\QualitySystem\Metric\ExternalMetric;
use Tests\APITest;
use Tests\Helper\MockExternalMetrics;


class ExternalMetricTest extends APITest {

    /** @test */
    public function it_normalizes_metric_same_value()
    {
        $externalMetrics = factory(ExternalMetric::class, 2)->make();
        $value = $externalMetrics->first()->value;
        $externalMetrics->first()->normalize($externalMetrics);
        $this->assertEquals(round($value, 2), round($externalMetrics->first()->value, 2));
    }

    /** @test */
    public function it_normalizes_metric_with_other_metric()
    {
        $externalMetrics = MockExternalMetrics::getExternalMetricDependOnRule();
        foreach ($externalMetrics->sortBy('level') as $metric)
        {
            $metric->normalize($externalMetrics);
        }
        $this->assertEquals(94.23, round($externalMetrics->first()->value, 2));
    }

}