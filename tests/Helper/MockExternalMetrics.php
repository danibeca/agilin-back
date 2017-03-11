<?php
namespace Tests\Helper;

use Agilin\Models\QualitySystem\Metric\ExternalMetric;

class MockExternalMetrics {

    public static function getPlain()
    {
        return factory(ExternalMetric::class)->make();
    }

    public static function getOrUpdateTypeTwo(ExternalMetric $externalMetric = null)
    {
        if ($externalMetric == null)
        {
            $externalMetric = self::getPlain();
        }
        $externalMetric->type = 2;
        return $externalMetric;
    }

    public static function getCollectionDependOnRule()
    {
        return collect([self::getSqaleExternalMetric(), self::getNlocExternalMetric()]);
    }

    public static function getSqaleExternalMetric()
    {
        $sqaleCode = 'sqale_index';
        $sqale = self::getPlain();
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
        $ncloc = self::getPlain();
        $ncloc->value = 1248;
        $ncloc->code = $nclocCode;
        $ncloc->normalization_rule = '{"*": [2, {"var": "@this"}]}';
        $ncloc->level = 1;
        $ncloc->metric()->associate(MockMetric::getMetric($nclocCode));
        return $ncloc;
    }

    public static function getValuesAfterReadOneTypeResponse()
    {
        $result = array();
        $result['ncloc'] = 1245;
        $result['sqale_index'] = 144;
        return $result;
    }

    public static function getValuesAfterReadTwoTypeResponse()
    {
        return array("foo" => "bar",
            "bar" => "foo");
    }


    public static function getMajorCodeSmell()
    {
        $metric = self::getOrUpdateTypeTwo();
        $metric->code = 'mayor_code_smells';
        $metric->pattern = '{"severity": "MAJOR", "type": "CODE_SMELL"}';
        $metric->value = 0;
        return $metric;
    }


    public static function getTagBrainOverload()
    {
        $metric = self::getOrUpdateTypeTwo();
        $metric->code = 'brain_overload';
        $metric->pattern = '{"search": "tags", "value": "brain-overload"}';
        $metric->value = 0;
        return $metric;
    }



    public static function getMinorVulnerabilities()
    {
        $metric = self::getOrUpdateTypeTwo();
        $metric->code = 'minor_vulnerabilities';
        $metric->pattern = '{"severity": "MINOR", "type": "VULNERABILITY"}';
        $metric->value = 0;
        return $metric;
    }

    public function it_crazy()
    {
        $a = json_decode('{
        "organization": "default-organization",
      "key": "AVqc-Xm5ayFRw6rZSVfF",
      "rule": "javascript:UnusedFunctionArgument",
      "severity": "MAJOR",
      "component": "quind-front:src/client/app/applications/controller/applications.controller.js",
      "componentId": 1592503,
      "project": "quind-front",
      "line": 9,
      "textRange": {
            "startLine": 9,
        "endLine": 9,
        "startOffset": 64,
        "endOffset": 70
      },
      "flows": [],
      "status": "OPEN",
      "message": "Remove the unused function parameter \"logger\".",
      "effort": "5min",
      "debt": "5min",
      "assignee": "danibeca@github",
      "author": "danibeca@okazo.co",
      "tags": [
            "cert",
            "misra",
            "unused"
        ],
      "creationDate": "2017-03-05T06:37:54+0100",
      "updateDate": "2017-03-05T06:37:54+0100",
      "type": "CODE_SMELL"
    }', true);

        $b = json_decode('{"severity": "MAJOR", "type": "CODE_SMELL"}', true);
        $c = array_intersect_assoc($a, $b);
        $this->assertEquals(count($b), count($c));

    }


}