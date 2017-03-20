<?php

namespace Tests\Unit\Account;


use Agilin\Models\Security\User;
use Tests\APITest;
use Tests\Helper\MockAccount;
use Tests\Helper\MockUser;


class AccountTest extends APITest {

    /** @test */
    public function it_hasnt_access()
    {
        $account = MockAccount::getAccountWithSystems();
        $this->assertFalse($account->hasAccess());

    }

    /** @test */
    public function it_has_access()
    {
        $user = MockUser::getWithAccount();
        $this->assertTrue($user->account->hasAccess($user));
    }

    /** @test */
    public function it_has_a_different_account()
    {
        $account = MockAccount::getAccountWithSystems();
        $user = factory(User::class)->make();
        $this->assertFalse($account->hasAccess($user));
    }
}