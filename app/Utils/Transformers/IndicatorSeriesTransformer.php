<?php

namespace Agilin\Utils\Transformers;

use Carbon\Carbon;

class IndicatorSeriesTransformer extends Transformer {


    public function transform($indicator)
    {
//'date' => Carbon::createFromFormat('Y-m-d', $indicator['pivot']['registered_date'])->toDateString(),

        return [
            'date' => Carbon::parse($indicator['pivot']['registered_date'])->format('d-m-Y'),
            'value' => $indicator['pivot']['value']
        ];
    }
}