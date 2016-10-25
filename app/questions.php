<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class questions extends Model
{
    //use Sluggable;
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function replies()
    {
    	return $this->hasMany('App\replies');
    }
    /*   public function sluggable()
    {
    	return [
    	'slug'=>['source'=>'question']
    	];

    }
    */
}
