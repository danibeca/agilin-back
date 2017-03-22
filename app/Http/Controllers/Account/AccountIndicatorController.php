<?php

namespace Agilin\Http\Controllers\Account;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Agilin\Utils\Transformers\IndicatorTransformer;
use Illuminate\Support\Facades\Auth;


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
        if ($account->hasAccess(Auth::guard('api')->user()))
        {
            $indicator = AccountIndicator::find($id);
            $indicator->calculate($account);

            return $this->respond([
                'data' => $this->indicatorTransformer->transform($indicator)
            ]);
        }
        return $this->respondNotFound();
    }
}
