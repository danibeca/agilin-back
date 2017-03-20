<?php

namespace Agilin\Http\Controllers\Application;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Application\Application;
use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;
use Illuminate\Support\Facades\Auth;


class ApplicationIndicatorController extends ApiController {

    protected $indicatorTransformer;

    public function __construct(IndicatorTransformer $indicatorTransformer)
    {
        $this->indicatorTransformer = $indicatorTransformer;
        $this->middleware('jwt.auth');
    }

    public function show($applicationId, $indicatorId)
    {
        $application = Application::find($applicationId);
        if ($application->hasAccess(Auth::guard('api')->user()))
        {
            $indicator = ApplicationIndicator::find($indicatorId);
            $indicator->calculate($application);

            return $this->respond([
                'data' => $this->indicatorTransformer->transform($indicator)
            ]);
        }

        return $this->respondNotFound();

    }
}
