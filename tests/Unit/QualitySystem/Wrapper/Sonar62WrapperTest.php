<?php
namespace Tests\Unit\QualitySystem\Wrapper;

use Agilin\Models\QualitySystem\Metric\ExternalMetric;
use Agilin\Models\QualitySystem\Wrapper\Sonar62Wrapper;
use Agilin\Models\QualitySystem\Wrapper\SonarWrapper;
use Buzz\Client\Curl;
use Buzz\Message\Response;
use Mockery as m;
use Tests\APITest;
use Tests\Helper\MockExternalMetrics;
use Tests\Helper\MockSonar62Response;


class Sonar62WrapperTest extends APITest {

    protected $sonar;
    protected $client;
    protected $response;


    protected function setUp()
    {
        parent::setUp();
        $this->client = m::mock(Curl::class);
        $this->response = m::mock(Response::class);
        $this->sonar = new Sonar62Wrapper('', '', 'http://181.143.68.26:9000/api', $this->client, $this->response);
    }

    /** @test */
    public function it_gets_the_right_resquest()
    {
        $projectId = 'quind-back';
        $stringMetrics = 'lines_number,complexity';
        $result = $this->sonar->getMetricsTypeOneUrl($projectId, $stringMetrics);
        $this->assertEquals('http://181.143.68.26:9000/api', $result['base']);
        $this->assertEquals('/resources?resource=' . $projectId . '&metrics=' . $stringMetrics, $result['resource']);
    }

    /** @test */
    public function it_reads_services_response_type_one()
    {
        $response = MockSonar62Response::getResponseTypeOne();
        $result = $this->sonar->readMetricsTypeOneResponse($response);
        $this->assertEquals('duplicated_lines_density', $result[0]['key']);
        $this->assertEquals(7.3, $result[0]['val']);
    }

    /** @test */
    public function it_transforms_metric()
    {
        $result = $this->sonar->transformMetric(['key' => 'duplicated_lines_density', 'val' => 2]);
        $this->assertEquals(2, $result['duplicated_lines_density']);
    }

    /** @test */
    public function it_gets_metrics()
    {
        $projectId = 'quind-back';

        $stringMetrics = collect([factory(ExternalMetric::class)->make(),
            factory(ExternalMetric::class)->make()]);

        $this->client->shouldReceive('send')->times(1);
        $this->client->shouldReceive('setVerifyPeer')->times(1);
        $this->client->shouldReceive('setTimeout')->times(1);
        $this->response->shouldReceive('getContent')->times(1)->andReturn(MockSonar62Response::getResponseTypeOne());
        $this->response->shouldReceive('isOk')->times(1)->andReturn(true);

        $result = $this->sonar->getExternalMetrics($projectId, $stringMetrics);

        $this->assertCount(3, $result);
        $this->assertEquals(0, $result['violations']);
        $this->assertEquals(0, $result['sqale_index']);
    }
}