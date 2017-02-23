<?php

namespace Agilin\Models\Projects;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $table = 'project';
    public $timestamps = false;

    public function applications()
    {
        return $this->hasMany('Agilin\Models\Projects\Application')->with('qualitySystem');
    }
}
