<?php

namespace Agilin\Console\Commands;

use Agilin\Models\Accounts\Account;
use Agilin\Models\Accounts\AccountIndicator;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

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
        foreach (Account::all() as $account)
        {
            foreach (AccountIndicator::all() as $indicator)
            {
                $indicator->calculate($account);
            }
        }
    }
}
