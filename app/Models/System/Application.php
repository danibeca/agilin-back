<?php

namespace Agilin\Models\System;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

    protected $table = 'application';
    public $timestamps = false;

    public function qualitySystem()
    {
        return $this->belongsToMany('Agilin\Models\QualitySystems\QualitySystem', 'application_qa_system')->withPivot('api_server_url', 'password', 'username', 'app_code');
    }

    public function businessIndicators()
    {
        return $this->belongsToMany('Agilin\Models\System\Indicators\BusinessIndicator', 'indicator_instance');
    }
}
