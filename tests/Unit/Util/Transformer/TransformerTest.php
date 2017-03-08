<?php
namespace Tests\Unit\Util\Transformer;

use Agilin\Utils\Transformers\ApplicationTransformer;
use Agilin\Utils\Transformers\IndicatorSeriesTransformer;
use Agilin\Utils\Transformers\IndicatorTransformer;
use Agilin\Utils\Transformers\SystemTransformer;
use Carbon\Carbon;
use Tests\APITest;
use Tests\Helper\MockApplication;
use Tests\Helper\MockApplicationIndicator;
use Tests\Helper\MockSystem;

class TransformerTest extends APITest {


    /** @test */
    public function it_transform_one_indicator()
    {
        $indicator = MockApplicationIndicator::getOrUpdateIndicatorWithRules();

        $result = (new IndicatorTransformer())->transform($indicator);
        $this->assertEquals($indicator->id, $result['id']);
        $this->assertEquals($indicator->name, $result['name']);
        $this->assertEquals($indicator->value, $result['value']);

    }

    /** @test */
    public function it_transform_one_application()
    {
        $application = MockApplication::getOnlyApplication();
        $result = (new ApplicationTransformer())->transform($application);
        $this->assertEquals($application->id, $result['id']);
        $this->assertEquals($application->name, $result['name']);
    }

    /** @test */
    public function it_transform_one_serie()
    {
        $serie = array();
        $value = 213;
        $serie['pivot'] = array();
        $serie['pivot']['registered_date'] = '2017-02-24';
        $serie['pivot']['value'] = $value;

        $result = (new IndicatorSeriesTransformer())->transform($serie);
        $this->assertEquals('24-02-2017', $result['date']);
        $this->assertEquals($value, $result['value']);
    }

    /** @test */
    public function it_transform_two_system()
    {
        $sys1 = MockSystem::getPlainSystem();
        $sys2 = MockSystem::getPlainSystem();
        $result = (new SystemTransformer())->transformCollection(array($sys1, $sys2));
        $this->assertEquals($sys1->id, $result[0]['id']);
        $this->assertEquals($sys1->name, $result[0]['name']);
        $this->assertEquals($sys2->id, $result[1]['id']);
        $this->assertEquals($sys2->name, $result[1]['name']);
    }

}