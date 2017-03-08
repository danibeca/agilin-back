<?php

namespace Agilin\Http\Controllers\Application;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Application\Application;
use Agilin\Utils\Transformers\IndicatorSeriesTransformer;


class ApplicationIndicatorSeriesController extends ApiController {

    protected $indicatorSeriesTransformer;

    public function __construct(IndicatorSeriesTransformer $indicatorSeriesTransformer)
    {
        $this->indicatorSeriesTransformer = $indicatorSeriesTransformer;
        $this->middleware('jwt.auth');
    }

    public function index($applicationId, $indicatorId)
    {
        $application = Application::find($applicationId);
        $result = $application->indicators()->wherePivot('application_indicator_id', $indicatorId)
            ->orderBy('pivot_registered_date', 'asc')
            ->get();

        return $this->respond([
            'data' => $this->indicatorSeriesTransformer->transformCollection($result->all())
        ]);
    }
}
