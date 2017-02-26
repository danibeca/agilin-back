<?php

namespace Agilin\Models\Account;

use Agilin\Models\System\SystemIndicator;
use Agilin\Utils\Models\AttributeValue;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class AccountIndicator extends Model {
    protected $table = 'account_indicator';
    protected $appends = ['value'];
    public $timestamps = false;

    use AttributeValue;

    public function accounts()
    {
        return $this->belongsToMany('Agilin\Models\Account\Account', 'account_has_indicator')->withPivot('value', 'registered_date');
    }

    public function calculate(Account $account)
    {
        $systemIndicator = SystemIndicator::find(1);
        $result = 0;
        $counter = 0;
        foreach ($account->systems as $system)
        {
            $counter++;
            $result += $systemIndicator->calculate($system);
        }
        $value = $result / $counter;
        $this->value = $value;
        $this->saveIndicator($account, $value);
        return $value;
    }

    public function saveIndicator(Account $account, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        $pivot = $this->accounts()->where('account_id', $account->id)->wherePivot('registered_date', $date)->get();
        if ($pivot->count() > 0)
        {
            $this->accounts()->where('account_id', $account->id)
                ->wherePivot('registered_date', $date)
                ->updateExistingPivot($account->id, ['value' => $value, 'registered_date' => $date]);
        } else
        {
            $this->accounts()->save($account, ['value' => $value, 'registered_date' => $date]);
        }
    }
}
