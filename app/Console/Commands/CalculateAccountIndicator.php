<?php

namespace Agilin\Console\Commands;

use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CalculateAccountIndicator extends Command
{


    protected $signature = 'indicator:calculate {--accountId=}';
    protected $description = 'Calculate general indicator for all accounts';
    protected $accounts;

    public function handle()
    {
        $accountId = $this->option('accountId');

        if ($accountId !== null)
        {
            $this->accounts = Account::where('id', $accountId)->get();
        } else
        {
            $this->accounts = Account::all();
        }
        session(['cronRun' => true]);
        foreach ($this->accounts as $account)
        {
            $this->calculateBasicIndicators($account);
            $this->calculateQualityAttributes($account);
        }


    }

    private function calculateBasicIndicators($account)
    {
        foreach (AccountIndicator::all() as $indicator)
        {
            try
            {
                $indicator->calculate($account);
            } catch (\Exception $e)
            {
                Log::info('Cron Job:: Account Basic Indicator, Account::' . $account->name . ', Exception message:: ' . $e->getMessage());
            }
        }
    }

    private function calculateQualityAttributes(Account $account)
    {

        try
        {
            $account->calculateQualityAttributes();

        } catch (\Exception $e)
        {
            Log::info('Cron Job:: Account Quality Attribute Indicator, Account::' . $account->name . ', Exception message:: ' . $e->getMessage());
            Log::info($e->getFile() . $e->getTraceAsString());
        }

    }


    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }
}
