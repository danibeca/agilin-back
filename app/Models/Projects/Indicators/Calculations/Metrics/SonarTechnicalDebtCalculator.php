<?php


namespace Agilin\Models\Projects\Indicators\Calculations\Metrics;


use Agilin\Models\Projects\Indicators\IndicatorMetric;


class SonarTechnicalDebtCalculator {

    public function calculate(IndicatorMetric $indicatorMetric)
    {
        $minValueAccepted = 0;
        $maxValueAccepted = 1;
        $metricValue = $indicatorMetric->externalMetric->value;
        $projectLines = $indicatorMetric->externalMetric->project_lines;
        $debtMinutesPerLine = $metricValue / $projectLines;

        $result = 0;
        if ($debtMinutesPerLine >= $minValueAccepted && $debtMinutesPerLine <= $maxValueAccepted)
        {
            $result = (1 - $debtMinutesPerLine) * 100;
        }
        return $result;
    }
}