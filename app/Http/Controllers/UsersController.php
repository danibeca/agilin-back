<?php

namespace Agilin\Http\Controllers;

use Agilin\Models\Accounts\Account;
use Agilin\Models\Accounts\AccountIndicator;
use Agilin\Models\System\System;
use Agilin\Models\System\SystemIndicator;
use Illuminate\Http\Request;
use Agilin\Models\Security\User;
use Agilin\Utils\Transformers\UserTransformer;


class UsersController extends ApiController {

    protected $userTransformer;

    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
        $this->middleware('jwt.auth', ['except' => ['index']]);

    }

    public function index(Request $request)
    {

        $user = User::with('account')->find(1);
        return $this->respond(['data' => [0 => ['id' => AccountIndicator::find(1)->calculate(Account::find(1))]]]);
    }

}
