<?php


namespace Agilin\Models\Projects\Indicators\Calculations\Metrics;


use Agilin\Models\Projects\Indicators\IndicatorMetric;


class DefaultMetricCalculator {

    public function calculate(IndicatorMetric $indicatorMetric)
    {
        return $indicatorMetric->getBussinesMapValue();
    }
}