<?php


namespace Tests\Unit\QualitySystem\Metric;


use Tests\APITest;
use Tests\Helper\MockMetric;

class MetricTest extends APITest {

    /** @test */
    public function it_gets_metric_value(){
        $metric = MockMetric::getMetric('nloc');
        $metric->value = 20.4;
        $this->assertEquals(20.4,$metric->getValueAttribute());
    }
}