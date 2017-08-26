<?php

namespace Agilin\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    public function type()
    {
        return $this->belongsTo('Agilin\Models\Application\IssueType');
    }

    public function impact()
    {
        return $this->belongsTo('Agilin\Models\Application\IssueImpact');
    }

    public function tags()
    {
        return $this->belongsToMany('Agilin\Models\Application\IssueTag');
    }

    public function rule()
    {
        return $this->belongsTo('Agilin\Models\Application\IssueRule');
    }
}
