<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TimeDay extends Model
{
	public $timestamps = false;
    
    public function user()
    {
    	return $this->belongsTo('App\Model\User','user_id')->get();    
    }

    public function times()
    {
        return $this->hasMany('App\Model\Time','time_days_id')->get();
    }


    public function timebytype($type)
    {
        if($this->times()!=null)
    	   return $this->times()->where('type_time', $type)->first();
        else
            return null;
    }
}
