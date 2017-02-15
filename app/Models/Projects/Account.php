<?php

namespace Agilin\Models\Projects;

use Agilin\Models\Projects\Indicators\BusinessIndicator;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    protected $table = 'account';
    public $timestamps = false;

    public function projects()
    {
        return $this->hasMany('Agilin\Models\Projects\Project')->with('qualitySystem');
    }

    public function calculateAccountIndicator()
    {
        $qualityCodeIndicator = BusinessIndicator::find(1);
        $result = 0;
        foreach ($this->projects as $project)
        {
            $result += $qualityCodeIndicator->calculate($project);
        }
        return $result / count($this->projects);
    }
}
