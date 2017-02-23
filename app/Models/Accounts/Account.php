<?php

namespace Agilin\Models\Accounts;

use Agilin\Models\Projects\Indicators\BusinessIndicator;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'account';
    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany('Agilin\Models\Projects\Project')->with('applications');
    }

    public function indicators()
    {
        return $this->belongsToMany('Agilin\Models\Accounts\AccountIndicator', 'account_has_indicator')->withPivot('value','registered_date');
    }
}
