<?php

namespace Agilin\Models\Account;

use Agilin\Models\System\SystemIndicator;
use Agilin\Utils\Models\AttributeValue;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use JWadhams\JsonLogic;


class AccountIndicator extends Model {

    protected $table = 'account_indicator';
    protected $appends = ['value'];
    protected $accountIdField = 'account_id';
    protected $valueField = 'value';
    protected $registeredDateField = 'registered_date';
    public $timestamps = false;

    use AttributeValue;

    public function accounts()
    {
        return $this->belongsToMany('Agilin\Models\Account\Account', 'account_has_indicator')->withPivot($this->valueField, $this->registeredDateField);
    }

    public function calculate(Account $account)
    {
        $date = Carbon::now()->format('Y-m-d');
        $result = 0;
        if ($this->hasRecordOnDate($account, $date) && ! session('cronRun', false))
        {
            $result = $this->calculateFromDB($account, $date);
        } else
        {
            $result = $this->calculateFromSystems($account);
        }
        $this->value = $result;
        return $result;
    }

    public function calculateFromDB(Account $account, $date)
    {
        return $this->accounts()
            ->where($this->accountIdField, $account->id)
            ->wherePivot($this->registeredDateField, $date)
            ->get()->first()
            ->pivot->value;
    }

    public function calculateFromSystems(Account $account)
    {
        $data = $this->calculation_data;

        foreach (json_decode($data) as $key => $attribute)
        {
            if (str_contains($key, '@sysInd_'))
            {
                $systemIndicator = $this->getDependencyByKey($key);
                $data = str_replace($key . '.value', $this->summarizeSystemIndicator($account, $systemIndicator), $data);
            }
        }
        $value = JsonLogic::apply(json_decode($this->calculation_rule), json_decode($data));
        $this->saveIndicator($account, $value);
        return $value;
    }


    public function summarizeSystemIndicator(Account $account, SystemIndicator $systemIndicator)
    {
        $result = 0;
        $counter = 0;
        foreach ($account->systems as $system)
        {
            $counter++;
            $result += $systemIndicator->calculate($system);
        }
        if ($counter > 0)
        {
            $result /= $counter;
        }
        return $result;
    }


    public function saveIndicator(Account $account, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        $pivot = $this->accounts()->where($this->accountIdField, $account->id)
            ->wherePivot($this->registeredDateField, $date)->get();
        if ($pivot->count() > 0)
        {
            $this->accounts()->where($this->accountIdField, $account->id)
                ->wherePivot($this->registeredDateField, $date)
                ->updateExistingPivot($account->id, [$this->valueField => $value, $this->registeredDateField => $date]);
        } else
        {
            $this->accounts()->save($account, [$this->valueField => $value, $this->registeredDateField => $date]);
        }
    }

    public function hasRecordOnDate(Account $account, $date)
    {
        $pivot = $this->accounts()->where($this->accountIdField, $account->id)
            ->wherePivot($this->registeredDateField, $date)->get();
        return ($pivot->count() > 0);
    }

    public function getDependencyByKey($key)
    {
        return SystemIndicator::where('code', substr($key, 8, strlen($key)))->first();
    }
}
