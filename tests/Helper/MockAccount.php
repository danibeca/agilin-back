<?php


namespace Tests\Helper;


use Agilin\Models\Account\Account;


class MockAccount {

    public static function getPlainAccount(){
        return factory(Account::class)->make();
    }

    public static function getAccountWithSystems()
    {
        $account = self::getPlainAccount();
        $account->systems->add(MockSystem::getSystemWithApplications());
        $account->systems->add(MockSystem::getPlainSystem());
        $account->systems->add(MockSystem::getPlainSystem());
        return $account;
    }

}

