<?php

namespace Agilin\Http\Controllers\Account;

use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Account\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountDetailsController extends ApiController
{
    public function index($accountId)
    {
        $account = Account::with('applications')->withCount('systems')
            ->where('id', $accountId)->first();

        if ($account->hasAccess(Auth::guard('api')->user()))
        {

            $total = 0;
            foreach ($account->applications as $application)
            {
                $total += DB::table('issues')->where('application_id', $application->id)->sum('effort');
            }


            return $this->respond([
                'data' => [[
                    'systems'      => $account->systems_count,
                    'applications' => $account->applications->count(),
                    'debt'         => $this->secondsToTime($total * 60)]

                ]]);
        }

        return $this->respondNotFound();
    }

    function secondsToTime($seconds)
    {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");

        return $dtF->diff($dtT)->format('%a días, %h horas, %i minutos');
    }
}
