<?php

namespace Agilin\Models\Accounts;

use Agilin\Models\Projects\Indicators\BusinessIndicator;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class AccountIndicator extends Model {

    protected $table = 'account_indicator';
    protected $appends = ['value'];
    public $timestamps = false;

    public function getValueAttribute()
    {
        $result = null;
        if (isset($this->attributes['value']))
        {
            $result = $this->attributes['value'];
        }
        return $result;
    }

    public function accounts()
    {
        return $this->belongsToMany('Agilin\Models\Accounts\Account', 'account_has_indicator')->withPivot('value','registered_date');
    }

    public function calculate(Account $account)
    {
        $qualityCodeIndicator = BusinessIndicator::find(1);
        $result = 0;
        $counter = 0;
        foreach ($account->projects as $project)
        {
            foreach ($project->applications as $application)
            {
                $counter++;
                $result += $qualityCodeIndicator->calculate($application);
            }
        }
        $value = $result / $counter;
        $this->saveIndicator($account,$value);
        $this->value = $value;
    }

    public function saveIndicator(Account $account, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        $pivot = $this->accounts()->wherePivot('registered_date',$date)->get();
        if($pivot->count() > 0){
            $this->accounts()->wherePivot('registered_date',$date)->updateExistingPivot(1, ['value' => $value, 'registered_date' => $date]);
        }else{
            $this->accounts()->save($account, ['value' => $value, 'registered_date' => $date]);
        }
    }
}
