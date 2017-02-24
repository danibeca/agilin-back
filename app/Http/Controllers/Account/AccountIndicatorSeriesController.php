<?php

namespace Agilin\Http\Controllers\Account;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Accounts\Account;
use Agilin\Models\Accounts\AccountIndicator;
use Agilin\Utils\Transformers\IndicatorSeriesTransformer;
use Agilin\Utils\Transformers\IndicatorTransformer;


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
        $result = $account->indicators()->wherePivot('account_indicator_id', $indicatorId)
            ->orderBy('pivot_registered_date', 'asc')
            ->get();

        return $this->respond([
            'data' => $this->indicatorSeriesTransformer->transformCollection($result->all())
        ]);
    }
}
