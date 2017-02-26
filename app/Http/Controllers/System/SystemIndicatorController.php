<?php

namespace Agilin\Http\Controllers\System;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Agilin\Models\System\System;
use Agilin\Models\System\SystemIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;


class SystemIndicatorController extends ApiController {

    protected $indicatorTransformer;

    public function __construct(IndicatorTransformer $indicatorTransformer)
    {
        $this->indicatorTransformer = $indicatorTransformer;
        $this->middleware('jwt.auth');
    }

    public function show($systemId, $id)
    {
        $system = System::find($systemId);
        $indicator = SystemIndicator::find($id);
        $indicator->calculate($system);

        return $this->respond([
            'data' => $this->indicatorTransformer->transform($indicator)
        ]);
    }
}
