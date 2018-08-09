<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','registration','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this;
    }
    public function timedays()
    {
        return $this->hasMany('App\Model\TimeDay','user_id')->get();
    }

    public function timedaytoday()
    {
        $today = Carbon::now()->toDateString();
        if($this->timedays()!=null)
            return $this->timedays()->where('date', $today)->first();
        return null;
    }

    public function timedaybydate($date)
    {
        if($this->timedays()!=null)
            return $this->timedays()->where('date', $date)->first();
        return null;
    }

    public function times()
    {
        if($this->timedaytoday()!=null)
            return $this->timedaytoday()->times();
        return null;
    }    
}
