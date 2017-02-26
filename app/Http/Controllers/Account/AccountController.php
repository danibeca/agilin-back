<?php

namespace Agilin\Http\Controllers\Account;

use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;

class AccountController extends ApiController {

    public function __construct()
    {
        $this->middleware('jwt.auth');

    }

    public function show($id)
    {
        return Account::findOrFail($id);
    }

}
