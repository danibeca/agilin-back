<?php

namespace Agilin\Http\Controllers\Account;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Accounts\Account;
use Agilin\Models\Accounts\AccountIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;


class AccountIndicatorController extends ApiController {

    protected $indicatorTransformer;

    public function __construct(IndicatorTransformer $indicatorTransformer)
    {
        $this->indicatorTransformer = $indicatorTransformer;
        $this->middleware('jwt.auth');
    }

    public function show($accountId, $id)
    {
        $account = Account::find($accountId);
        $indicator = AccountIndicator::find($id);
        $indicator->calculate($account);

        return $this->respond([
            'data' => $this->indicatorTransformer->transform($indicator)
        ]);
    }
}
