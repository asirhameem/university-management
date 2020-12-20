<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\message;
use App\warning;

use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
     
	function message(){
        $user = message::all();
		return view('history.message')->with('user', $user);
    }

    function warning(){
    $user = DB::table('warning')
        ->join('user', 'warning.uid', '=', 'user.uid')
        ->select('warning.*', 'user.username')
        ->get();
    return view('history.warning')->with('user', $user);
}
     
	function feedback(){
        
            $user = feedback::all();
		return view('history.feedback')->with('user', $user);
    }
    function history(){
        
        $user = DB::table('appointment')
        ->join('user', 'appointment.cid', '=', 'user.userid')
        ->join('service', 'appointment.serviceid', '=', 'service.serviceid')
        ->select('appointment.*', 'user.username', 'service.servicename')
        ->get();
    return view('history.history')->with('user', $user);
}

function transaction(){
    $user = DB::table('account')
        ->join('user', 'account.cid', '=', 'user.userid')
        ->join('service', 'account.serviceid', '=', 'service.serviceid')
        ->select('account.*', 'user.username', 'service.servicename')
        ->get();
    return view('history.transaction')->with('user', $user);
}
}
