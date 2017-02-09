<?php

namespace Agilin\Models\QualitySystems\Wrappers;


use Agilin\Models\QualitySystems\Metrics\ExternalMetric;

abstract class QualityPlatformWrapper {

    protected $username;
    protected $password;
    protected $serverAPI;
    public static $DUPLICATELINES = 'duplicateLines';
    public static $TECHNICALDEBTTIME = 'technicalDebtTime';
    public static $FUNCTIONCOMPLEXITY = 'functionComplexity';


    public function __construct($username, $password, $serverAPI)
    {
        $this->username = $username;
        $this->password = $password;
        $this->serverAPI = $serverAPI;
    }

    public abstract function getExternalMetrics($projectId, $metricCodes);

    public abstract function getStandardMetricName($key);

    public abstract function getProjectNumberOfLines($projectId);

}