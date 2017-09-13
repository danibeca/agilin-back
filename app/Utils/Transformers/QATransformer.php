<?php

namespace Agilin\Utils\Transformers;

use Agilin\Models\Application\QualityAttribute;
use Illuminate\Database\Eloquent\Collection;

class QATransformer
{

    public function transform(Collection $data)
    {
        $qas = $data->pluck('quality_attribute_id')->unique();
        $countQA = 0;
        $resultData = null;
        $resultName = [];
        foreach ($qas as $qa)
        {


            $countQA++;
            array_push($resultName,
                ['balloonText'           => 'Criticidad:<b>[[y]]</b> Esfuerzo:<b>[[x]]</b><br>Cantidad:<b>[[value]]</b>',
                 'bullet'                => 'circle',
                 'lineAlpha'             => 0,
                 'valueField'            => 'value' . $countQA,
                 'xField'                => 'x' . $countQA,
                 'yField'                => 'y' . $countQA,
                 'fillAlphas'            => 0,
                 'maxBulletSize'         => 80,
                 'title'                 => QualityAttribute::find($qa)->name,

                 'minBulletSize'         => 15,
                 'bulletBorderAlpha'     => 1,
                 'bulletBorderThickness' => 2,
                 'bulletAlpha'           => 0.8
                ]);

            $count = 0;
            $values = $data->where('quality_attribute_id', $qa);
            foreach ($values as $value)
            {
                $count++;
                $resultData[$count]['y' . $countQA] = $value->impact->weight;
                $resultData[$count]['x' . $countQA] = intval($value->effort);
                $resultData[$count]['value' . $countQA] = $value->quantity;
            }

        }

        //return ['graphs' => $resultName, 'data' => array_values($resultData)];
        return [array_values($resultName), array_values($resultData)];

    }
}