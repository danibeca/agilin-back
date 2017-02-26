<?php

namespace Agilin\Http\Controllers\Application;

use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Models\Security\User;
use Agilin\Utils\Transformers\ApplicationTransformer;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;


class ApplicationController extends ApiController {

    protected $applicationTransformer;

    public function __construct(ApplicationTransformer $applicationTransformer)
    {
        $this->applicationTransformer = $applicationTransformer;
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        $accountId = 3;
        $groups = Account::whereId($accountId)->with('systems')->get()->pluck('systems')[0]->pluck('applications')->all();
        $apps = collect([]);
        $count = 0;
        foreach ($groups as $group)
        {
            $count++;
            if ($group->count() > 1)
            {
                $apps = $apps->union($group);
            } else
            {
                $apps->push($group[0]);
            }
        }
        return $this->respond([
            'data' => $this->applicationTransformer
                ->transformCollection(
                    $apps->all())
        ]);
    }

}
