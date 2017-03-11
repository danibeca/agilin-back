<?php


namespace Tests\Unit\QualitySystem\Wrapper;


use Agilin\Models\QualitySystem\Wrapper\SonarWrapper;
use Illuminate\Support\Facades\Log;
use Tests\APITest;
use Tests\Helper\MockExternalMetrics;
use Mockery as m;
use Tests\Helper\MockSonar62Response;
use Tests\Helper\MockSonar63Response;

class SonarWrapperTest extends APITest {

    /** @test */
    public function it_calls_type1_metrics()
    {
        $sonar = m::mock(SonarWrapper::class . '[getExternalMetricsTypeOneRequest]', array('', '', 'http://181.143.68.26:9000/api'));
        $sonar->shouldReceive('getExternalMetricsTypeOneRequest')->times(1);
        $sonar->getExternalMetrics(12, collect([MockExternalMetrics::getPlain()]));
        $this->assertTrue(true);
    }


    /** @test */
    public function it_doesnt_call_type1_metrics()
    {
        $sonar = m::mock(SonarWrapper::class . '[getExternalMetricsTypeOneRequest, getExternalMetricsTypeTwoRequest]', array('', '', 'http://181.143.68.26:9000/api'));
        $sonar->shouldReceive('getExternalMetricsTypeOneRequest')->andReturns(30);
        $sonar->shouldReceive('getExternalMetricsTypeTwoRequest')->times(0);
        $sonar->getExternalMetrics(12, collect([MockExternalMetrics::getNlocExternalMetric()]));
        $this->assertTrue(true);
    }

    /** @test */
    public function it_calls_type2_metric_method()
    {
        $sonar = m::mock(SonarWrapper::class, array('', '', 'http://181.143.68.26:9000/api'))->makePartial();
        $response = MockSonar62Response::getResponseTypeTwo();
        $result = $sonar->readMetricsTypeTwoResponse($response, collect([MockExternalMetrics::getMajorCodeSmell()]));
        $sonar->shouldReceive('getExternalMetricsTypeTwoRequest')->andReturn(array());
        $sonar->getExternalMetrics(12, collect([MockExternalMetrics::getOrUpdateTypeTwo()]));
        $this->assertTrue(true);

    }

    /** @test */
    public function it_calls_type1_and_type2()
    {
        $sonar = m::mock(SonarWrapper::class . '[getExternalMetricsTypeOneRequest,getExternalMetricsTypeTwoRequest]', array('', '', 'http://181.143.68.26:9000/api'));
        $sonar->shouldReceive('getExternalMetricsTypeOneRequest')->times(1)->andReturns(MockExternalMetrics::getValuesAfterReadOneTypeResponse());
        $sonar->shouldReceive('getExternalMetricsTypeTwoRequest')->times(1)->andReturns(MockExternalMetrics::getValuesAfterReadTwoTypeResponse());
        $result = $sonar->getExternalMetrics(12, collect([MockExternalMetrics::getNlocExternalMetric(), MockExternalMetrics::getOrUpdateTypeTwo()]));
        $this->assertEquals(4, count($result));
    }

    /** @test */
    public function it_reads_services_response_type_two()
    {
        $sonar = m::mock(SonarWrapper::class, array('', '', 'http://181.143.68.26:9000/api'))->makePartial();
        $response = MockSonar62Response::getResponseTypeTwo();
        $result = $sonar->readMetricsTypeTwoResponse($response, collect([MockExternalMetrics::getMajorCodeSmell()]));
        $this->assertEquals(75, $result['mayor_code_smells']);
    }

    /** @test */
    public function it_reads_services_response_type_two63()
    {
        $sonar = m::mock(SonarWrapper::class, array('', '', 'http://181.143.68.26:9000/api'))->makePartial();
        $response = MockSonar63Response::getResponseTypeTwo();
        $result = $sonar->readMetricsTypeTwoResponse($response, collect([MockExternalMetrics::getMajorCodeSmell()]));
        $this->assertEquals(4, $result['mayor_code_smells']);
    }

    /** @test */
    public function it_gets_url_metric_type_two()
    {
        $sonar = m::mock(SonarWrapper::class, array('', '', 'http://181.143.68.26:9000/api'))->makePartial();
        $projectId = 'agilin-back';
        $resultExpected = array();
        $resultExpected['base'] = 'http://181.143.68.26:9000/api';
        $resultExpected['resource'] = '/issues/search?componentKeys=' . $projectId . '&statuses=OPEN,REOPENED';
        $result = $sonar->getMetricsTypeTwoUrl($projectId);
        $this->assertEquals($resultExpected['base'], $result['base']);
        $this->assertEquals($resultExpected['resource'], $result['resource']);

    }

    /** @test */
    public function it_gets_array_with_results()
    {
        $sonar = m::mock(SonarWrapper::class, array('', '', 'http://181.143.68.26:9000/api'))->makePartial();
        $response = MockSonar63Response::getResponseTypeTwo();
        $result = $sonar->readMetricsTypeTwoResponse($response, collect([MockExternalMetrics::getMajorCodeSmell(), MockExternalMetrics::getMinorVulnerabilities()]));
        $this->assertEquals(2, count($result));

    }

    /** @test */
    public function it_gets_metric_brain_overload()
    {
        $sonar = m::mock(SonarWrapper::class, array('', '', 'http://181.143.68.26:9000/api'))->makePartial();
        $response = MockSonar63Response::getResponseTypeTwo();
        $result = $sonar->readMetricsTypeTwoResponse($response, collect([MockExternalMetrics::getTagBrainOverload()]));
        $this->assertEquals(2,$result['brain_overload']);


    }


}