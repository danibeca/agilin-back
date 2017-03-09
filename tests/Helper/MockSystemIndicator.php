<?php


namespace Tests\Helper;


use Agilin\Models\System\SystemIndicator;


class MockSystemIndicator {

    public static function getPlainIndicator()
    {
        return factory(SystemIndicator::class)->make();
    }

    public static function getOrUpdateIndicatorWithRules($indicator = null)
    {
        if ($indicator == null)
        {
            $indicator = self::getPlainIndicator();
        }
        $indicator->calculation_rule = '{"*": [2, {"var": "@appsInd_function_complexity"}]}';
        $indicator->calculation_data = '{ "@appsInd_function_complexity" : "@appsInd_function_complexity.value" }';
        return $indicator;
    }



}