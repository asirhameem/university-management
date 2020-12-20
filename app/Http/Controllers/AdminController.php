<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
	function index(){
		return view('adminhome.index');
    }
    
    
	function profile(){
		$id = session()->get('uid');
		$user = User::where('uid' ,$id)
		->get();
		return view('admin.profile')->with('users', $user);
    }
  
	function edit()
	{
		$id = session()->get('uid');
		$user = User::where('uid', $id)
		->get();
		return view('admin.updateprofile')->with('users', $user);
	}
	function update(Request $request)
	{
		$request->validate([
			'name'=>'required',
			'email'=>'required',
			'username'=>'required',
			'password'=>'required',
			'status'=>'required'
			
			
		]);

		$user = User::find(session()->get('uid'));
		$user->name = $request->name;
		$user->email = $request->email;
		$user->username = $request->username;
		$user->password = $request->password;
		$user->status = $request->status;
		
		$user->save();
		return redirect()->route('adminhome.profile');
		
	}

}

