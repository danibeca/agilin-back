<?php


namespace Tests\Helper;


use Agilin\Models\System\System;

class MockSystem {

    public static function getPlainSystem(){
        return factory(System::class)->make();
    }

}