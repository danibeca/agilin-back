<?php

namespace Tests\Helper;

use Agilin\Models\QualitySystem\QualitySystem;

class MockQualitySystem {

    public static function getQualitySystemWithExternalMetrics()
    {
        $qualitySystem = factory(QualitySystem::class)->make();
        foreach (MockExternalMetrics::getCollectionDependOnRule() as $metric)
        {
            $qualitySystem->externalMetrics->add($metric);
        }
        return $qualitySystem;
    }

}