<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\TimeDay;
use App\Model\Time;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('employee.home')
        	->with('users',$users)
        	->with('timeday',null);
    }

    public function storetimer(Request $request)
    {

        $users = DB::table('users')->get();
    	$user_id = $request->employee;
    	$type_time = $request->type_time;
    	
    	$user = User::find($user_id);
    	$time_day = $user->timedaytoday();
    	if($time_day==null)
    	{
	    	$time_day = new TimeDay;
	    	$time_day->user_id = $user->id;
	    	$time_day->date = Carbon::now()->toDayDateTimeString();
	    	$time_day->save();

			$time = new Time;
	    	$time->time_days_id = $time_day->id;
	    	$time->time_start = Carbon::now()->toTimeString();
	    	$time->type_time = $type_time;
	    	$time->status = false;
	    	$time->save();
    	}
    	else
    	{
    		$time=$time_day->timebytype($type_time);
    		if($time==null)
    		{
    			$time = new Time;
		    	$time->time_days_id = $time_day->id;
		    	$time->time_start = Carbon::now()->toTimeString();
		    	$time->type_time = $type_time;
		    	$time->status = false;
		    	$time->save();
    		}
    		else
    		{
    			$time->time_end = Carbon::now()->toTimeString();
    			$time->status = true;
    			$time->save();
    		}
    	}
    	return view('employee.home')
        	->with('users',$users)
        	->with('timeday',$time_day);
    }

    public function method($user_id)
	{
      	$user = User::find($user_id);

    	return response()->json($user->times());
	}
}
