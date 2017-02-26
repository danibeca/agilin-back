<?php

namespace Agilin\Models\System;

use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Utils\Models\AttributeValue;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class SystemIndicator extends Model {

    protected $table = 'system_indicator';
    protected $appends = ['value'];
    public $timestamps = false;

    use AttributeValue;

    public function systems()
    {
        return $this->belongsToMany('Agilin\Models\System\System', 'system_has_indicator')->withPivot('value', 'registered_date');
    }

    public function calculate(System $system)
    {
        $qualityCodeIndicator = ApplicationIndicator::find(1);
        $result = 0;
        $counter = 0;
        foreach ($system->applications as $application)
        {
            $counter++;
            $result += $qualityCodeIndicator->calculate($application);
        }
        $value = $result / $counter;
        $this->saveIndicator($system, $value);
        $this->value = $value;
        return $value;
    }

    public function saveIndicator(System $system, $value)
    {
        $date = Carbon::now()->format('Y-m-d');
        $pivot = $this->systems()->where('system_id', $system->id)->wherePivot('registered_date', $date)->get();
        if ($pivot->count() > 0)
        {
            $this->systems()
                ->where('system_id', $system->id)
                ->wherePivot('registered_date', $date)
                ->updateExistingPivot($system->id, ['value' => $value, 'registered_date' => $date]);
        } else
        {
            $this->systems()->save($system, ['value' => $value, 'registered_date' => $date]);
        }
    }
}
