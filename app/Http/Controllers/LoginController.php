<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SpRequest;
use App\User;
use Validator;
//use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    function index(){
        return view('login.index');
    }

    function verify(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $users = User::all();

        $uid = User::where('email', $request->email)
                    ->where('password', $request->password)
                    ->get('uid');

        $type = User::where('email', $request->email)
            ->where('password', $request->password)
            ->get('type');

        foreach($type as $usertype)
        {
            $usertype= $usertype->type ;

        }


     
        if(count($uid) > 0 && $usertype==4)
        {
            $request->session()->put('email', $request->input('email'));
             $request->session()->put('username', $request->input('username'));
            
            $request->session()->put('uid', $uid[0]->uid);
            
                return redirect()->route('adminhome.index');
            
        }
        else{

            $request->session()->flash('msg', 'invalid email/password');
            
            
            return redirect('/login');

        }
    }
}


