<?php


namespace Tests\Unit\System;


use Tests\APITest;
use Tests\Helper\MockSystem;
use Tests\Helper\MockUser;

class SystemTest extends APITest {

    /** @test */
    public function it_hasnt_access()
    {
        $system =  MockSystem::getPlainSystem();
        $this->assertFalse($system->hasAccess());
    }

    /** @test */
    public function it_has_access()
    {
        $user = MockUser::getWithAccount();
        $this->assertTrue($user->account->systems->first()->hasAccess($user));
    }

    /** @test */
    public function it_hasnt_the_system()
    {
        $system = MockSystem::getPlainSystem();
        $user = MockUser::getWithAccount();
        $this->assertFalse($system->hasAccess($user));
    }
}