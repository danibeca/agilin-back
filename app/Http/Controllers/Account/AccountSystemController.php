<?php

namespace Agilin\Http\Controllers\Account;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Utils\Transformers\SystemTransformer;


class AccountSystemController extends ApiController {

    protected $systemTransformer;

    public function __construct(SystemTransformer $systemTransformer)
    {
        $this->systemTransformer = $systemTransformer;
        $this->middleware('jwt.auth');
    }

    public function index($accountId)
    {
        $account = Account::find($accountId);
        $result = $account->systems()->get();

        return $this->respond([
            'data' => $this->systemTransformer->transformCollection($result->all())
        ]);
    }
}
