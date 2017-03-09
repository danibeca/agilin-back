<?php


namespace Tests\Helper;


use Agilin\Models\Account\AccountIndicator;

class MockAccountIndicator {

    public static function getPlainIndicator()
    {
        return factory(AccountIndicator::class)->make();
    }

    public static function getOrUpdateIndicatorWithRules($indicator = null)
    {
        if ($indicator == null)
        {
            $indicator = self::getPlainIndicator();
        }
        $indicator->calculation_rule = '{"*": [3, {"var": "@sysInd_function_complexity"}]}';
        $indicator->calculation_data = '{ "@sysInd_function_complexity" : "@sysInd_function_complexity.value" }';
        return $indicator;
    }
}