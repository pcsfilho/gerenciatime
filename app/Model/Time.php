<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
	//public $timestamps = false;
    public function timeday()
    {
  		return $this->belongsTo('App\Model\TimeDay','time_days_id')->first();    
    }

    public function user()
    {
    	if($this->timeday()!=null)
  			return $this->timeday()->user()->first();    
  		return null;
    }
}
