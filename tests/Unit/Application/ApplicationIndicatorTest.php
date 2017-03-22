<?php

namespace Tests\Unit\Application;

use Agilin\Models\Application\Application;
use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Models\QualitySystem\Metric\Metric;
use Agilin\Models\QualitySystem\Metric\MetricRepository;
use Tests\APITest;
use Tests\Helper\MockApplication;
use Tests\Helper\MockApplicationIndicator;
use Tests\Helper\MockMetric;

class ApplicationIndicatorTest extends APITest {

    /** @test */
    public function it_gets_indicator_value_from_mock_repository()
    {
        $repo = $this->createMock(MetricRepository::class);
        $repo->method('getMetricValue')->willReturn(20);
        $application = MockApplication::getPlainApplication();
        $indicator = $this->createPartialMock(ApplicationIndicator::class, array('saveIndicator'));
        $indicator = MockApplicationIndicator::getOrUpdateIndicatorWithRules($indicator);
        $indicator->setMetricRepository($repo);
        $result = $indicator->calculateFromRepository($application);
        $this->assertEquals(20, $result);

    }

    /** @test */
    public function it_calculates_complex_indicator_value_from_mock_repository()
    {
        $repo = $this->createMock(MetricRepository::class);
        $repo->method('getMetricValue')->will($this->onConsecutiveCalls(20, 30, 40));
        $application = MockApplication::getPlainApplication();
        $indicator = $this->createPartialMock(ApplicationIndicator::class, array('saveIndicator', 'hasRecordOnDate', 'getDependencyByKey'));
        $indicator = MockApplicationIndicator::getOrUpdateIndicatorWithComplexRules($indicator);
        $indicator->setMetricRepository($repo);

        $dependency = $this->createPartialMock(ApplicationIndicator::class, array('saveIndicator', 'hasRecordOnDate'));
        $dependency = MockApplicationIndicator::getOrUpdateIndicatorWithRules($dependency);
        $dependency->setMetricRepository($repo);
        $indicator->method('getDependencyByKey')->willReturn($dependency);


        $result = $indicator->calculateFromRepository($application);
        $this->assertEquals(30, $result);
    }

    /** @test */
   /* public function test_indicator()
    {
        $indicator = ApplicationIndicator::find(13);
        session(['cronRun' => true]);
        $result = $indicator->calculate(Application::find(4));
        self::assertTrue(true);
    }*/
}