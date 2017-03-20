<?php

namespace Tests\Unit\Application;


use Agilin\Models\Security\User;
use Mockery\Mock;
use Tests\APITest;
use Tests\Helper\MockAccount;
use Tests\Helper\MockApplication;
use Tests\Helper\MockUser;


class ApplicationTest extends APITest {

    /** @test */
    public function it_hasnt_access()
    {
        $application = MockApplication::getPlainApplication();
        $this->assertFalse($application->hasAccess());
    }

    /** @test */

    public function it_has_access()
    {
        $user = MockUser::getWithAccount();
        $this->assertTrue($user->account
            ->systems->first()
            ->applications->first()->hasAccess($user));
    }

    /** @test */
    public function it_has_a_different_account()
    {
        $application = MockApplication::getPlainApplication();
        $user = MockUser::getWithAccount();
        $this->assertFalse($application->hasAccess($user));
    }
}