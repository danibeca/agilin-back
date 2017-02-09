<?php


namespace Agilin\Models\Projects\Indicators\Calculations\Metrics;


use Agilin\Models\Projects\Indicators\IndicatorMetric;


class SonarComplexityCalculator {

    public function calculate(IndicatorMetric $indicatorMetric)
    {
        $minValueAccepted = 0;
        $maxValueAccepted = 5;
        $metricValue = $indicatorMetric->externalMetric->value;
        $result = 0;
        if ($metricValue >= $minValueAccepted && $metricValue <= $maxValueAccepted)
        {
            $result = (1 - ($metricValue / $maxValueAccepted)) * 100;
        }
        return $result;
    }
}