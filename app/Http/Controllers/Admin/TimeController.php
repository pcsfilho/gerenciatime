<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\TimeDay;
use App\Model\User;
use App\Model\Time;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //$times = DB::table('times')->paginate(10);
        $times = Time::all();
        return view('admin.register.list')
            ->with('times',$times);
    }

    public function registersByUser($user_id)
    {
        $user = User::find($user_id);
        $times = $user->times();
        return view('admin.employee.register.list')
            ->with('user',$user)
            ->with('times',$times);
    }
}
