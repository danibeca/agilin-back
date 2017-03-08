<?php

namespace Agilin\Console\Commands;

use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CalculateAccountIndicator extends Command {

    protected $signature = 'indicatorscalculate';
    protected $description = 'Calculate general indicator for all accounts';
    protected $accounts;

    public function handle()
    {
        if ($this->accounts == null)
        {
            $this->accounts = Account::all();
        }
        session(['cronRun' => true]);
        foreach ($this->accounts as $account)
        {
            foreach (AccountIndicator::all() as $indicator)
            {
                try
                {
                    $indicator->calculate($account);
                } catch (\Exception $e)
                {
                    Log::info('Cron Job:: Account Indicator, Account::' . $account->name . ', Exception message:: ' . $e->getMessage());
                }
            }
        }
    }

    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }
}
