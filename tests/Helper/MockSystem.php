<?php


namespace Tests\Helper;


use Agilin\Models\System\System;

class MockSystem {

    public static function getPlainSystem(){
        return factory(System::class)->make();
    }

    public static function getSystemWithApplications()
    {
        $system = self::getPlainSystem();
        $system->applications->add(MockApplication::getPlainApplication());
        $system->applications->add(MockApplication::getPlainApplication());
        $system->applications->add(MockApplication::getPlainApplication());
        return $system;
    }

}

