<?php


namespace Agilin\Models\Projects\Indicators\Calculations;


use Agilin\Models\Projects\Indicators\IndicatorInstance;

class DefaultIndicatorCalculator {

    public function calculate(IndicatorInstance $indicatorInstance)
    {
        $result = 0;
        foreach ($indicatorInstance->indicatorMetrics as $indicatorMetric)
        {
            $result +=$indicatorMetric->calculate();
        }
        return $result/count($indicatorInstance->indicatorMetrics);
    }
}