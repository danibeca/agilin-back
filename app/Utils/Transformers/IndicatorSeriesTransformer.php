<?php

namespace Agilin\Utils\Transformers;

use Carbon\Carbon;

class IndicatorSeriesTransformer extends Transformer {


    public function transform($indicator)
    {
        return [
            'date' => Carbon::parse($indicator['pivot']['registered_date'])->format('d-m-Y'),
            'value' => round($indicator['pivot']['value'], 3)
        ];
    }
}