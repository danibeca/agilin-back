<?php


namespace Agilin\Models\Language;


use Illuminate\Database\Eloquent\Model;

class Resource extends Model {

    protected $table = 'language_resource';
    public $timestamps = false;

    public function language()
    {
        return $this->belongsToMany('Agilin\Models\Language\Language', 'translation', 'language_resource_id')
            ->select(array('id'))
            ->withPivot('translation')
            ->where('language_id', '=', session('language', 1));
    }


}