<?php

namespace Agilin\Http\Controllers\Account;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Agilin\Models\Application\QualityAttributeData;
use Agilin\Utils\Transformers\QATransformer;
use Illuminate\Support\Facades\Auth;


class QAController extends ApiController
{

    protected $QATransformer;

    public function __construct(QATransformer $QATransformer)
    {
        $this->QATransformer = $QATransformer;
        //$this->middleware('jwt.auth');
    }

    public function index($accountId)
    {
       // $account = Account::find($accountId);
//        if ($account->hasAccess(Auth::guard('api')->user()))
  //      {


            return $this->respond([
                'data' => $this->QATransformer
                    ->transform(
                        QualityAttributeData::where('account_id', $accountId)->get())]);
    /*    }

        return $this->respondNotFound();*/
    }

}
