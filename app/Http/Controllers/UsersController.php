<?php

namespace Agilin\Http\Controllers;

use Agilin\Models\Accounts\AccountIndicator;
use Illuminate\Http\Request;
use Agilin\Models\Security\User;
use Agilin\Utils\Transformers\UserTransformer;


class UsersController extends ApiController {

    protected $userTransformer;

    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
        //$this->middleware('jwt.auth', ['except' => ['index']]);
        // $this->middleware('auth:api');
       // $this->middleware('jwt.auth');

    }

    public function store(Request $request)
    {

    }

    public function index(Request $request)
    {

        $user = User::with('account')->find(1);
        return $this->respond(['data' => [0 => ['id' => AccountIndicator::find(1)->calculate($user->account)]]]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return $this->respond([
            'data' => $this->userTransformer->transform($user)
        ]);

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


}
