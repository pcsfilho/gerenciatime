<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\TimerDay;
use App\Model\Timer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $registers = DB::table('timer_days')->paginate(10);
        return view('admin.employee.register.list')
            ->with('registers',$registers);
    }
}
