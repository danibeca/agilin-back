<?php

namespace Agilin\Models\Application;

use Illuminate\Database\Eloquent\Model;

class QualityAttributeData extends Model
{
    public function impact()
    {
        return $this->belongsTo('Agilin\Models\Application\IssueImpact');
    }

    public function qualityAttribute()
    {
        return $this->belongsTo('Agilin\Models\Application\QualityAttribute');

    }

    public function account()
    {
        return $this->belongsTo('Agilin\Models\Account\Account');
    }

}
