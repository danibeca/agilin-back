<?php

namespace Agilin\Utils\Transformers;


class ApplicationTransformer extends Transformer {

    public function transform($application)
    {
        return [
            'id' => $application['id'],
            'name' => $application['name']
        ];
    }
}