<?php


namespace Tests\Unit\System;


use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Models\QualitySystem\Metric\MetricRepository;
use Agilin\Models\System\SystemIndicator;
use Tests\APITest;
use Tests\Helper\MockApplicationIndicator;
use Tests\Helper\MockSystem;
use Tests\Helper\MockSystemIndicator;

class SystemIndicatorTest extends APITest {

    /** @test */
    public function it_summarizes_application_indicator()
    {
        $system = MockSystem::getSystemWithApplications();
        $systemIndicator = MockSystemIndicator::getPlainIndicator();
        $repo = $this->createMock(MetricRepository::class);
        $repo->method('getMetricValue')->will($this->onConsecutiveCalls(20, 45, 60));
        $indicator = $this->createPartialMock(ApplicationIndicator::class, array('saveIndicator', 'hasRecordOnDate', 'getDependencyByKey'));
        $indicator = MockApplicationIndicator::getOrUpdateIndicatorWithRules($indicator);
        $indicator->setMetricRepository($repo);
        $result = $systemIndicator->summarizeApplicationIndicator($system, $indicator);
        $this->assertEquals(41.67, round($result, 2));
    }

    /** @test */
    public function it_calculates_indicator_on_apps()
    {
        $system = MockSystem::getSystemWithApplications();
        $systemIndicator = $this->createPartialMock(SystemIndicator::class, array('getDependencyByKey', 'saveIndicator'));
        $systemIndicator = MockSystemIndicator::getOrUpdateIndicatorWithRules($systemIndicator);
        $repo = $this->createMock(MetricRepository::class);
        $repo->method('getMetricValue')->will($this->onConsecutiveCalls(20, 45, 60));
        $indicator = $this->createPartialMock(ApplicationIndicator::class, array('saveIndicator', 'hasRecordOnDate', 'getDependencyByKey'));
        $indicator = MockApplicationIndicator::getOrUpdateIndicatorWithRules($indicator);
        $indicator->setMetricRepository($repo);
        $systemIndicator->method('getDependencyByKey')->willReturn($indicator);
        $result = $systemIndicator->calculateFromApplications($system);
        $this->assertEquals(83.33, round($result, 2));
    }

    /** @test */
    public function it_calculates_on_db()
    {
        $system = MockSystem::getSystemWithApplications();
        $systemIndicator = $this->createPartialMock(SystemIndicator::class, array('hasRecordOnDate', 'calculateFromDB'));
        $systemIndicator->method('hasRecordOnDate')->willReturn(true);
        $systemIndicator->method('calculateFromDB')->willReturn(37);
        $result = $systemIndicator->calculate($system);
        $this->assertEquals(37, $result);
    }

    public function it_calculates_from_applications()
    {
        $system = MockSystem::getSystemWithApplications();
        $systemIndicator = $this->createPartialMock(SystemIndicator::class, array('hasRecordOnDate', 'calculateFromApplications'));
        $systemIndicator->method('hasRecordOnDate')->willReturn(false);
        $systemIndicator->method('calculateFromApplications')->willReturn(258);
        $result = $systemIndicator->calculate($system);
        $this->assertEquals(258, $result);
    }
}