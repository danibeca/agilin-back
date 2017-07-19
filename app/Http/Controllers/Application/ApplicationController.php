<?php

namespace Agilin\Http\Controllers\Application;

use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Agilin\Utils\Transformers\ApplicationTransformer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class ApplicationController extends ApiController {

    protected $applicationTransformer;

    public function __construct(ApplicationTransformer $applicationTransformer)
    {
        $this->applicationTransformer = $applicationTransformer;
        $this->middleware('jwt.auth');
    }

    public function index()
    {
        $applicationGroups = Account::whereId(Auth::guard('api')
            ->user()->account_id)->with('systems')->get()
            ->pluck('systems')[0]->pluck('applications')->all();
        $apps = collect([]);
        foreach ($applicationGroups as $group)
        {
            foreach ($group as $app)
            {
                $apps->push($app);
            }
        }

        return $this->respond([
            'data' => $this->applicationTransformer
                ->transformCollection(
                    $apps->all())
        ]);
    }

}
