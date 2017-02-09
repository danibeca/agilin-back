<?php

namespace Agilin\Http\Controllers;

use Agilin\Models\Projects\Project;
use Agilin\Models\QualitySystem\Metrics\MetricCalculator;
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


    }

    public function store(Request $request)
    {

    }

    public function index()
    {
        $user = User::with('account')->find(1);
        //return $user->account->calculateAccountIndicator();
        return $this->respond([ 'data' =>[ 0 => [
            'id' => $user->account->calculateAccountIndicator()
            ]]
        ]);
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
