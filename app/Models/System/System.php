<?php

namespace Agilin\Models\System;

use Illuminate\Database\Eloquent\Model;

class System extends Model {

    protected $table = 'system';
    public $timestamps = false;

    public function applications()
    {
        return $this->hasMany('Agilin\Models\System\Application')->with('qualitySystem');
    }
}
