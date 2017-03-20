<?php

namespace Agilin\Models\Account;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'account';
    public $timestamps = false;

    public function systems()
    {
        return $this->hasMany('Agilin\Models\System\System')->with('applications');
    }

    public function indicators()
    {
        return $this->belongsToMany('Agilin\Models\Account\AccountIndicator', 'account_has_indicator')->withPivot('value', 'registered_date');
    }

    public function hasAccess($user = null)
    {
        $result = false;
        if ($user !== null)
        {
            $result = ($this->id === $user->account_id);
        }
        return $result;
    }
}
