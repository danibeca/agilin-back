<?php

namespace Agilin\Models\Account;

use Agilin\Models\Application\Application;
use Agilin\Models\Application\Issue;
use Agilin\Models\Application\IssueImpact;
use Agilin\Models\Application\IssueType;
use Agilin\Models\Application\QualityAttribute;
use Agilin\Models\Application\QualityAttributeData;
use Agilin\Models\Security\User;
use Agilin\Models\System\System;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{

    protected $table = 'account';
    public $timestamps = false;

    public function systems()
    {
        return $this->hasMany('Agilin\Models\System\System')->with('applications');
    }

    public function applications()
    {
        return $this->hasManyThrough('Agilin\Models\Application\Application', 'Agilin\Models\System\System');
    }

    public function indicators()
    {
        return $this->belongsToMany('Agilin\Models\Account\AccountIndicator', 'account_has_indicator')->withPivot('value', 'registered_date');
    }

    public function hasAccess($user = null)
    {
        /** @var User $user */
        $result = false;
        if ($user !== null)
        {
            $result = ($this->id === $user->account_id);
        }

        return $result;
    }

    public function calculateQualityAttributes()
    {

        //  var_dump($this->systems->first()->applications->first()->getIssuesFromServer());
        $min = 100000000;
        $max = 0;
        foreach ($this->systems as $system)
        {
            /** @var System $system */
            foreach ($system->applications as $application)
            {
                /** @var Application $application */
                $application->getIssuesFromServer();
                //$effort = $application->getIssuesFromServer();
                /*if ($effort['min'] < $min)
                {
                    $min = $effort['min'];
                }
                if ($effort['max'] > $max)
                {
                    $max = $effort['max'];
                }*/
            }
        }

        $this->getQA();
    }

    public function getTime(Issue $issue)
    {
        $result = 0;
        if ($issue->effort <= 30)
        {
            $result = 1;
        } else if ($issue->effort > 30 && $issue->effort <= 180)
        {
            $result = 2;
        } else if ($issue->effort > 180 && $issue->effort <= 360)
        {
            $result = 3;
        } else if ($issue->effort > 360 && $issue->effort <= 720)
        {
            $result = 4;
        } else
        {
            $result = 5;
        }

        return $result;

    }

    public function getQA()
    {
        //$issueTypes = IssueType::all();
        $issueImpacts = IssueImpact::all();
        $qualityAttributes = QualityAttribute::all();
        $result = [];
        foreach ($issueImpacts as $issueImpact)
        {
            $issues = Issue::from('issues')
                ->join('system AS s', function ($join) {
                    $join->where('s.account_id', '=', $this->id);
                })
                ->join('application as a', function ($join) {
                    $join->on('a.system_id', '=', 's.id');
                    $join->on('a.id', '=', 'issues.application_id');
                })
                ->where('issues.impact_id', $issueImpact->id)
                ->select('issues.*')
                ->get();

            foreach ($issues as $issue)
            {
                $effort = $this->getTime($issue);

                $assigned = false;
                foreach ($qualityAttributes as $qualityAttribute)
                {
                    foreach ($issue->tags as $tag)
                    {
                        if ($qualityAttribute->tags->pluck('name')->contains($tag->name) && ! $assigned)
                        {
                            if (! isset($result[$issueImpact->id . '-' . $effort . '-' . $qualityAttribute->id]))
                            {
                                $result[$issueImpact->id . '-' . $effort . '-' . $qualityAttribute->id] = 0;
                            }
                            $result[$issueImpact->id . '-' . $effort . '-' . $qualityAttribute->id]++;
                            $assigned = true;
                            break;
                        }
                    }

                    if ($qualityAttribute->rules->pluck('name')->contains($issue->rule->name) && ! $assigned)
                    {
                        if (! isset($result[$issueImpact->id . '-' . $effort . '-' . $qualityAttribute->id]))
                        {
                            $result[$issueImpact->id . '-' . $effort . '-' . $qualityAttribute->id] = 0;
                        }
                        $result[$issueImpact->id . '-' . $effort . '-' . $qualityAttribute->id]++;
                        $assigned = true;
                        break;
                    }

                }

            }
        }
        QualityAttributeData::where('account_id', $this->id)->delete();
        foreach ($result as $key => $value)
        {
            $info = explode('-', $key);
            $qadata = new QualityAttributeData();
            $qadata->impact_id = $info[0];
            $qadata->effort = $info[1];
            $qadata->quality_attribute_id = $info[2];
            $qadata->quantity = $value;
            $qadata->account_id = $this->id;

            $qadata->save();

        }


    }
}
