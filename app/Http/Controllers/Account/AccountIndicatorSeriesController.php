<?php

namespace Agilin\Http\Controllers\Account;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Agilin\Utils\Transformers\IndicatorSeriesTransformer;
use Agilin\Utils\Transformers\IndicatorTransformer;
use Illuminate\Support\Facades\Auth;


class AccountIndicatorSeriesController extends ApiController {

    protected $indicatorSeriesTransformer;

    public function __construct(IndicatorSeriesTransformer $indicatorSeriesTransformer)
    {
        $this->indicatorSeriesTransformer = $indicatorSeriesTransformer;
        $this->middleware('jwt.auth');
    }

    public function index($accountId, $indicatorId)
    {
        $account = Account::find($accountId);
        if($account->hasAccess(Auth::guard('api')->user()))
        {
            $result = $account->indicators()->wherePivot('account_indicator_id', $indicatorId)
                ->orderBy('pivot_registered_date', 'asc')
                ->get();

            return $this->respond([
                'data' => $this->indicatorSeriesTransformer->transformCollection($result->all())
            ]);
        }
        return $this->respondNotFound();
    }
}
