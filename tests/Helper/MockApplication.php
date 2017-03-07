<?php


namespace Tests\Helper;

use Agilin\Models\Application\Application;

class MockApplication {

    public static function getApplicationWithQSandMetrics()
    {
        $application = self::getOnlyApplication();
        $application->qualitySystem->add(MockQualitySystem::getQualitySystemWithExternalMetrics());
        return $application;
    }

    public static function getOnlyApplication()
    {
        $application = factory(Application::class)->make();
        return $application;
    }


}