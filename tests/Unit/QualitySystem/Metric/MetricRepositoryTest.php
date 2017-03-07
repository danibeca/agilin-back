<?php


namespace Tests\Unit\QualitySystem\Metric;


use Agilin\Models\Application\Application;
use Agilin\Models\QualitySystem\Metric\Metric;
use Agilin\Models\QualitySystem\Metric\MetricRepository;
use Agilin\Models\QualitySystem\QualitySystem;
use Agilin\Models\QualitySystem\Wrapper\Sonar63Wrapper;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\APITest;
use Mockery as m;
use Tests\Helper\MockApplication;
use Tests\Helper\MockExternalMetrics;

class MetricRepositoryTest extends APITest {

    protected $wrapper;
    protected $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->wrapper = m::mock(Sonar63Wrapper::class);
        $this->repository = new MetricRepository($this->wrapper);
    }


    /** @test */
    public function it_gets_extenal_metric_from_server()
    {
        $this->wrapper->shouldReceive('getExternalMetrics')->times(1)->andReturn(MockExternalMetrics::getExternalMetricValuesDependOnRuleFromServer());
        $result = $this->repository->getAllMetricFromServer(MockApplication::getApplicationWithQSandMetrics(), 'testingApp');
        $this->assertEquals(94.22, round($result[0]['value'], 2));
        $this->assertEquals(2490, $result[1]['value']);
    }

    /** @test */
    public function it_gets_a_metric_value()
    {
        $mock = $this->createPartialMock(MetricRepository::class, array('getRepo', 'getMetricValueFromServer'));
        $result = $mock->getMetricValue(MockApplication::getOnlyApplication(), factory(Metric::class)->make());
        $this->assertEquals(0, $result);
    }

    /** @test */
    public function it_gets_a_metric_value_from_repo()
    {
        $application = MockApplication::getApplicationWithQSandMetrics();
        $metric = $application->qualitySystem->first()->externalMetrics->first()->metric;

        $repo = array();
        $repo[$metric->id . '@' . $application->id] = 211.54;
        session(['metricRepository' => $repo]);
        $result = $this->repository->getMetricValue($application, $metric);
        $this->assertEquals(211.54, $result);
    }

    /** @test */
    public function it_gets_a_metric_from_mock_server()
    {
        $this->wrapper->shouldReceive('getExternalMetrics')->times(1)->andReturn(MockExternalMetrics::getExternalMetricValuesDependOnRuleFromServer());
        $application = MockApplication::getApplicationWithQSandMetrics();
        $metric = $application->qualitySystem->first()->externalMetrics->first()->metric;
        $result = $this->repository->getMetricValue($application, $metric);
        $this->assertEquals(94.22, round($result, 2));
    }

    /** @test */
    public function it_assigns_value_zero_to_external_metric()
    {
        $result = $this->repository->assignExternalMetricValues(collect([MockExternalMetrics::getNlocExternalMetric()]), null);
        $this->assertEquals(0, $result[0]['value']);
    }

}