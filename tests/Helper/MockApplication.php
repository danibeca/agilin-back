<?php


namespace Tests\Helper;

use Agilin\Models\Application\Application;

class MockApplication {

    public static function getApplicationWithQSandMetrics()
    {
        $application = self::getPlainApplication();
        $application->qualitySystem->add(MockQualitySystem::getQualitySystemWithExternalMetrics());
        return $application;
    }

    public static function getPlainApplication()
    {
        $application = factory(Application::class)->make();
        return $application;
    }


}