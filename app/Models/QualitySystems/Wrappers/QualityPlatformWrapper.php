<?php

namespace Agilin\Models\QualitySystems\Wrappers;


abstract class QualityPlatformWrapper {

    protected $username;
    protected $password;
    protected $serverAPI;

    public function __construct($username, $password, $serverAPI)
    {
        $this->username = $username;
        $this->password = $password;
        $this->serverAPI = $serverAPI;
    }

    public abstract function getExternalMetrics($projectId, $metricCodes);
}