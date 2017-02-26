<?php

namespace Agilin\Utils\Transformers;


class SystemTransformer extends Transformer {

    public function transform($system)
    {
        return [
            'id' => $system['id'],
            'name' => $system['name']
        ];
    }
}