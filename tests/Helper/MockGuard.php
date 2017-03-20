<?php


namespace Tests\Helper;


use Agilin\Models\Security\User;

class MockGuard {

    protected $user;

    public function __construct($user = null)
    {
        $this->user = $user;
    }

    public function user()
    {
        if ($this->user === null)
        {
            $this->user = MockUser::getWithAccount();
        }
        return $this->user;
    }
}