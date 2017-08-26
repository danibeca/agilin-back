<?php

namespace Agilin\Models\Application;

use Illuminate\Database\Eloquent\Model;

class QualityAttribute extends Model
{
    public function tags(){
        return $this->belongsToMany('Agilin\Models\Application\IssueTag');
    }

    public function rules(){
        return $this->belongsToMany('Agilin\Models\Application\IssueRule');
    }
}
