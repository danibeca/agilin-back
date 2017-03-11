<?php
namespace Tests\Unit\QualitySystem\Wrapper;

use Agilin\Models\QualitySystem\Wrapper\Sonar63Wrapper;
use Buzz\Client\Curl;
use Buzz\Message\Response;
use Mockery as m;
use Tests\APITest;
use Tests\Helper\MockExternalMetrics;
use Tests\Helper\MockSonar63Response;


class Sonar63WrapperTest extends APITest {

    protected $sonar;
    protected $client;
    protected $response;

    protected function setUp()
    {
        parent::setUp();
        $this->client = m::mock(Curl::class);
        $this->response = m::mock(Response::class);
        $this->sonar = new Sonar63Wrapper('', '', 'http://181.143.68.26:9000/api', $this->client, $this->response);
    }

    /** @test */
    public function it_gets_the_right_resquest()
    {
        $projectId = 'quind-back';
        $stringMetrics = 'lines_number,complexity';
        $result = $this->sonar->getMetricsTypeOneUrl($projectId, $stringMetrics);
        $this->assertEquals('http://181.143.68.26:9000/api', $result['base']);
        $this->assertEquals('/measures/component?componentKey=' . $projectId . '&metricKeys=' . $stringMetrics, $result['resource']);
    }

    /** @test */
    public function it_reads_services_response_type_one()
    {
        $response = MockSonar63Response::getResponseTypeOne();
        $result = $this->sonar->readMetricsTypeOneResponse($response);
        $this->assertEquals('sqale_index', $result[0]['metric']);
        $this->assertEquals(144, $result[0]['value']);
    }

    /** @test */
    public function it_transforms_metric()
    {
        $result = $this->sonar->transformMetricTypeOne(['metric' => 'duplicated_lines_density', 'value' => 2]);
        $this->assertEquals(2, $result['duplicated_lines_density']);
    }

}