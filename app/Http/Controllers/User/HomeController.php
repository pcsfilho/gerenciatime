<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Support\Facades\DB;

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
        return view('employee.home', compact('users'));
    }

    public function storetimer(Request $request)
    {
    	$user_id = $request->employee;
    	$user = User::find($user_id);
    	dd($user->name);
    }
}
