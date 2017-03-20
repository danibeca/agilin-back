<?php

namespace Agilin\Models\System;

use Illuminate\Database\Eloquent\Model;

class System extends Model {

    protected $table = 'system';
    public $timestamps = false;

    public function applications()
    {
        return $this->hasMany('Agilin\Models\Application\Application')->with('qualitySystem');
    }

    public function indicators()
    {
        return $this->belongsToMany('Agilin\Models\System\SystemIndicator', 'system_has_indicator')->withPivot('value', 'registered_date');
    }

    public function hasAccess($user = null)
    {
        $result = false;

        if ($user !== null && $user->account !== null && $user->account->systems != null)
        {
            $result = $user->account->systems->where('id', $this->id)->count() > 0;
        }
        return $result;
    }

}
