<?php
namespace Tests\Helper;

use Agilin\Models\QualitySystem\Metric\ExternalMetric;

class MockExternalMetrics {

    public static function getExternalMetricDependOnRule()
    {
        return collect([self::getSqaleExternalMetric(), self::getNlocExternalMetric()]);
    }

    public static function getSqaleExternalMetric()
    {
        $sqaleCode = 'sqale_index';
        $sqale = factory(ExternalMetric::class)->make();
        $sqale->value = 144;
        $sqale->code = $sqaleCode;
        $sqale->level = 2;
        $sqale->metric()->associate(MockMetric::getMetric($sqaleCode));
        $sqale->normalization_rule = '{"if": [{"and": [{">=": [{"/":[{ "var" : "@this" },{ "var" : "@ext_ncloc" }]}, {"var": "#minValueAccepted"}]}, {"<=": [{"/":[{ "var" : "@this" },{ "var" : "@ext_ncloc" }]}, {"var": "#maxValueAccepted"}]}]}, {"*": [{"-": [1, {"/": [{"var": "@this"}, {	"var": "@ext_ncloc"}]}]}, 100]}, 0]}';
        $sqale->normalization_data = '{ "@this" : "@this.value", "@ext_ncloc" : "@ext_ncloc.value", "#minValueAccepted" : 0, "#maxValueAccepted" : 1 }';

        return $sqale;
    }

    public static function getNlocExternalMetric()
    {
        $nclocCode = 'ncloc';
        $ncloc = factory(ExternalMetric::class)->make();
        $ncloc->value = 1248;
        $ncloc->code = $nclocCode;
        $ncloc->normalization_rule = '{"*": [2, {"var": "@this"}]}';
        $ncloc->level = 1;
        $ncloc->metric()->associate(MockMetric::getMetric($nclocCode));
        return $ncloc;
    }

    public static function getExternalMetricValuesDependOnRuleFromServer()
    {
        $result = array();
        $result['ncloc'] = 1245;
        $result['sqale_index'] = 144;
        return $result;
    }


}