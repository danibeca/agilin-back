<?php

namespace Agilin\Models\Application;

use Agilin\Models\QualitySystem\Metric\MetricRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Application extends Model
{

    protected $table = 'application';
    public $timestamps = false;

    public function qualitySystem()
    {
        return $this->belongsToMany('Agilin\Models\QualitySystem\QualitySystem', 'application_qa_system')->withPivot('api_server_url', 'password', 'username', 'app_code');
    }

    public function indicators()
    {
        return $this->belongsToMany('Agilin\Models\Application\ApplicationIndicator', 'application_has_indicator')->withPivot('value', 'registered_date');
    }

    public function hasAccess($user = null)
    {
        $result = false;

        if ($user !== null && $user->account !== null && $user->account->systems !== null)
        {

            foreach ($user->account->systems as $system)
            {

                if ($system->applications !== null && $system->applications->where('id', $this->id)->count() > 0)
                {
                    $result = true;
                    break;
                }
            }
        }

        return $result;
    }

    public function getIssuesFromServer()
    {
        Issue::where('application_id', $this->id)->delete();
        $metricRepository = new MetricRepository();
        $metricRepository->getOpenIssuesFromServer($this);
        if (! $min = DB::table('issues')->where('application_id', $this->id)->min('effort'))
        {
            $min = 100000000;
        }
        if (! $max = DB::table('issues')->where('application_id', $this->id)->max('effort'))
        {
            $max = 0;
        }

        return [
            'min' => $min,
            'max' => $max
        ];

    }

}
