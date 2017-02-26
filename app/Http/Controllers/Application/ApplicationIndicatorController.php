<?php

namespace Agilin\Http\Controllers\Application;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Accounts\Account;
use Agilin\Models\Accounts\AccountIndicator;
use Agilin\Models\Application\Application;
use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;


class ApplicationIndicatorController extends ApiController {

    protected $indicatorTransformer;

    public function __construct(IndicatorTransformer $indicatorTransformer)
    {
        $this->indicatorTransformer = $indicatorTransformer;
        $this->middleware('jwt.auth');
    }

    public function show($applicationId, $id)
    {
        $application = Application::find($applicationId);
        $indicator = ApplicationIndicator::find($id);
        $indicator->calculate($application);

        return $this->respond([
            'data' => $this->indicatorTransformer->transform($indicator)
        ]);
    }
}
