<?php

namespace Agilin\Console\Commands;

use Agilin\Models\Account\Account;
use Agilin\Models\Account\AccountIndicator;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CalculateAccountIndicator extends Command {

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'indicatorscalculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate general indicator for all accounts';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        session(['cronRun' => true]);
        foreach (Account::all() as $account)
        {
            foreach (AccountIndicator::all() as $indicator)
            {
                try{
                    $indicator->calculate($account);
                }
                catch (\Exception $e){
                    Log::info('Cron Job:: Account Indicator, Account::'.$account->name.', Exception message:: '.$e->getMessage());
                }
            }
        }
    }
}
