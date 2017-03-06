<?php
namespace Tests\Unit\QualitySystem;

use Tests\APITest;
use Tests\Helper\MockSonarResponse;


class Sonar62WrapperTest extends APITest {

    protected $sonar;


    protected function setUp()
    {
        parent::setUp();
        $this->sonar = new \Agilin\Models\QualitySystem\Wrapper\Sonar62Wrapper('', '', 'http://181.143.68.26:9000/api');
    }

    /** @test */
    public function it_gets_the_right_resquest()
    {

        $projectId = 'quind-back';
        $stringMetrics = 'lines_number,complexity';
        $result = $this->sonar->getMetricsUrl($projectId, $stringMetrics);
        $this->assertEquals($result['base'], 'http://181.143.68.26:9000/api');
        $this->assertEquals($result['resource'], '/resources?resource=' . $projectId . '&metrics=' . $stringMetrics);
    }

    /** @test */
    public function it_reads_services_response()
    {
        $response = MockSonarResponse::getResponse();
        $result = $this->sonar->readResponse($response);
        $this->assertEquals($result[0]['key'], 'duplicated_lines_density');
        $this->assertEquals($result[0]['val'], 7.3);
    }

    /** @test */
    public function it_transforms_metric()
    {
        $result = $this->sonar->transformMetric(['key' => 'duplicated_lines_density', 'val' => 2]);
        $this->assertEquals($result['duplicated_lines_density'], 2);
    }

    /** @test */
    public function it_gets_metrics()
    {
        $projectId = 'quind-back';

        /*$stringMetrics = [factory(\Agilin\Models\QualitySystem\Metric\ExternalMetric::class)->make(),
            factory(\Agilin\Models\QualitySystem\Metric\ExternalMetric::class)->make()
        ];
        $result = $this->sonar->getExternalMetrics($projectId, $stringMetrics);*/
        factory(\Agilin\Model\User2::class)->make();

        //$this->assertEquals($result, 2);
    }



}