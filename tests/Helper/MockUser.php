<?php


namespace Tests\Helper;


use Agilin\Models\Security\User;

class MockUser {

    public static function getPlain()
    {
        return factory(User::class)->make();
    }

    public static function getWithAccount($idAccount = null)
    {
        $account = MockAccount::getAccountWithSystems();
        if ($idAccount !== null)
        {
            $account->id = $idAccount;
        }
        $user = self::getPlain();
        $user->account_id = $account->id;
        $user->setRelation('account', $account);
        return $user;
    }

}

