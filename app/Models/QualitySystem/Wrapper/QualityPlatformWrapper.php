<?php

namespace Agilin\Models\QualitySystem\Wrapper;


use Agilin\Models\Application\Application;
use Illuminate\Database\Eloquent\Collection;

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

    public abstract function getExternalMetrics($projectId, Collection $externalMetrics);

    public abstract function getOpenIssues(Application $application, $projectId);
}