<?php

namespace Agilin\Http\Controllers\System;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\System\System;
use Agilin\Utils\Transformers\IndicatorSeriesTransformer;
use Illuminate\Support\Facades\Auth;


class SystemIndicatorSeriesController extends ApiController {

    protected $indicatorSeriesTransformer;

    public function __construct(IndicatorSeriesTransformer $indicatorSeriesTransformer)
    {
        $this->indicatorSeriesTransformer = $indicatorSeriesTransformer;
        $this->middleware('jwt.auth');
    }

    public function index($systemId, $indicatorId)
    {
        $system = System::find($systemId);
        if ($system->hasAccess(Auth::guard('api')->user()))
        {
            $result = $system->indicators()->wherePivot('system_indicator_id', $indicatorId)
                ->orderBy('pivot_registered_date', 'asc')
                ->get();

            return $this->respond([
                'data' => $this->indicatorSeriesTransformer->transformCollection($result->all())
            ]);
        }
        return $this->respondNotFound();
    }
}
