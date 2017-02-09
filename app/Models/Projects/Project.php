<?php

namespace Agilin\Models\Projects;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $table = 'project';
    public $timestamps = false;

    public function qualitySystem()
    {
        return $this->belongsToMany('Agilin\Models\QualitySystems\QualitySystem', 'project_qa_system')->withPivot('api_server_url', 'password', 'username');
    }

    public function getNumberOfLines()
    {
        $qaSystem = $this->qualitySystem->first();
        $wrapper = new $qaSystem->wrapper_class($qaSystem->username, $qaSystem->password, $qaSystem->pivot->api_server_url);
        return $wrapper->getProjectNumberOfLines($this->name);
    }
}
