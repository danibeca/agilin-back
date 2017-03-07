<?php


namespace Tests\Helper;


use Agilin\Models\Application\ApplicationIndicator;

class MockApplicationIndicator {

    public static function getIndicator()
    {
        return factory(ApplicationIndicator::class)->make();
    }

    public static function getOrUpdateIndicatorWithRules($indicator = null)
    {
        if($indicator == null){
            $indicator = self::getIndicator();
        }
        $indicator->calculation_rule = '{ "var" : ["@met_function_complexity"] }';
        $indicator->calculation_data = '{ "@met_function_complexity" : "@met_function_complexity.value" }';
        return $indicator;

    }

    public static function getOrUpdateIndicatorWithComplexRules($indicator = null)
    {
        if($indicator == null){
            $indicator = self::getIndicator();
        }
        $indicator->calculation_rule = '{"/":[{"+":[ {"var" : "@ind_function_complexity"},{"var" : "@ind_duplicated_lines"}, {"var" : "@ind_technical_debt"}]},3]}';
        $indicator->calculation_data = '{ "@ind_function_complexity" : "@ind_function_complexity.value", "@ind_duplicated_lines" : "@ind_duplicated_lines.value", "@ind_technical_debt" : "@ind_technical_debt.value"}';
        return $indicator;

    }


}