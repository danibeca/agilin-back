<?php


namespace Tests\Unit\QualitySystem\Wrapper;


use Agilin\Models\QualitySystem\Wrapper\Sonar62Wrapper;
use Agilin\Models\QualitySystem\Wrapper\Sonar63Wrapper;
use Agilin\Models\QualitySystem\Wrapper\SonarWrapper;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;
use Tests\APITest;
use Tests\Helper\MockExternalMetrics;
use Mockery as m;
use Tests\Helper\MockSonar62Response;
use Tests\Helper\MockSonar63Response;
use Tests\Helper\MockTestngResponse;

class TestngProjectIssuesTest extends APITest {


    /** @test */
    public function it_reads_services_response_type_two()
    {
        $sonar = new Sonar63Wrapper('', '', 'http://181.143.68.26:9000/api');
        $response = MockTestngResponse::getResponseIssues();
        $result = $sonar->readMetricsTypeTwoResponse($response, $sonar->getTypeTwoMetricByPattern(new Collection(collect([MockExternalMetrics::getMajorCodeSmell()]))));
        $this->assertEquals(6, $result['mayor_code_smells']);
    }

    /** @test */
    public function it_gets_number_of_pages_from_response()
    {
        $sonar = new Sonar63Wrapper('', '', 'http://181.143.68.26:9000/api');
        $response = MockTestngResponse::getResponseIssues();
        $result = $sonar->readNumberOfPages($response);
        $this->assertEquals(25, $result);
    }

    /** @test */
    public function it_calls_getExternalMetricsTypeTwoRequest()
    {
        $sonar = m::mock(SonarWrapper::class . '[request]', array('', '', 'http://181.143.68.26:9000/api'));
        $sonar->shouldReceive('request')->andReturns(MockTestngResponse::getResponseIssues());
        $result = $sonar->getExternalMetricsTypeTwoRequest(12, new Collection(collect([MockExternalMetrics::getMajorCodeSmell()])));
        $this->assertEquals(150, $result['mayor_code_smells']);
    }

    /** @test */
    public function it_calls_function_number_of_pages()
    {
        $sonar = m::mock(SonarWrapper::class . '[request, readNumberOfPages]', array('', '', 'http://181.143.68.26:9000/api'));
        $sonar->shouldReceive('request')->times(7)->andReturns(MockTestngResponse::getResponseIssues());
        $sonar->shouldReceive('readNumberOfPages')->times(1)->andReturns(6);
        $result = $sonar->getExternalMetricsTypeTwoRequest(12, new Collection(collect([MockExternalMetrics::getMajorCodeSmell()])));
        $this->assertTrue(true);

    }

    /** @test */
    public function it_gets_types_of_metrics_by_pattern()
    {
        $sonar = new Sonar63Wrapper('', '', 'http://181.143.68.26:9000/api');
        $result = $sonar->getTypeTwoMetricByPattern(new Collection(collect([MockExternalMetrics::getMajorCodeSmell()])));
        $this->assertEquals(1, count($result['issueMetrics']));
    }
}