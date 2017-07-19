<?php

namespace Agilin\Http\Controllers\System;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\System\System;
use Agilin\Models\System\SystemIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;
use Illuminate\Support\Facades\Auth;


class SystemIndicatorController extends ApiController {

    protected $indicatorTransformer;

    public function __construct(IndicatorTransformer $indicatorTransformer)
    {
        $this->indicatorTransformer = $indicatorTransformer;
        $this->middleware('jwt.auth');
    }

    public function index($systemId)
    {
        $system  = System::find($systemId);
        if ($system->hasAccess(Auth::guard('api')->user()))
        {
            $indicators = collect([]);
            foreach (SystemIndicator::all() as $indicator)
            {
                $indicator->calculate($system);
                $indicators->push($indicator);
            }
            return $this->respond([
                'data' => $this->indicatorTransformer
                    ->transformCollection(
                        $indicators->all())]);
        }
        return $this->respondNotFound();
    }

    public function show($systemId, $indicatorId)
    {
        $system = System::find($systemId);
        if ($system->hasAccess(Auth::guard('api')->user()))
        {
            $indicator = SystemIndicator::find($indicatorId);
            $indicator->calculate($system);

            return $this->respond([
                'data' => $this->indicatorTransformer->transform($indicator)
            ]);
        }
        return $this->respondNotFound();
    }
}
