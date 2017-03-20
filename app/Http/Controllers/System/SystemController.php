<?php

namespace Agilin\Http\Controllers\System;


use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Utils\Transformers\SystemTransformer;
use Illuminate\Support\Facades\Auth;


class SystemController extends ApiController {

    protected $systemTransformer;

    public function __construct(SystemTransformer $systemTransformer)
    {
        $this->systemTransformer = $systemTransformer;
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        return $this->respond([
            'data' => $this->systemTransformer->transformCollection(
                Account::find(Auth::guard('api')->user()->account_id)
                    ->systems()->get()->all())
        ]);
    }
}
