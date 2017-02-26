<?php

namespace Agilin\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

    protected $table = 'application';
    public $timestamps = false;

    public function qualitySystem()
    {
        return $this->belongsToMany('Agilin\Models\QualitySystem\QualitySystem', 'application_qa_system')->withPivot('api_server_url', 'password', 'username', 'app_code');
    }

    public function indicators()
    {
        return $this->belongsToMany('Agilin\Models\Application\ApplicationIndicator', 'application_has_indicator')->withPivot('value', 'registered_date');
    }
}
