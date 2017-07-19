<?php

namespace Agilin\Http\Controllers\Application;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Application\Application;
use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class ApplicationIndicatorController extends ApiController {

    protected $indicatorTransformer;

    public function __construct(IndicatorTransformer $indicatorTransformer)
    {
        $this->indicatorTransformer = $indicatorTransformer;
        $this->middleware('jwt.auth');
    }

    public function show($applicationId, $indicatorIds)
    {
        $application = Application::find($applicationId);
        if ($application->hasAccess(Auth::guard('api')->user()))
        {
            $indicatorArray = array_map('intval', explode(',', $indicatorIds));
            $indicators = collect([]);
            foreach (ApplicationIndicator::find($indicatorArray) as $indicator)
            {
                $indicator->calculate($application);
                $indicators->push($indicator);
            }

            return $this->respond([
                'data' => $this->indicatorTransformer
                    ->transformCollection(
                        $indicators->all())]);
        }

        return $this->respondNotFound();

    }
}
