<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    
	function index(Request $req){

		if($req->session()->has('uid')){

			return view('adminhome.index', ['uid'=> $req->session()->get('uid')]);

		
	}else{
		 $req->session()->flash('msg', 'invalid request');
		return redirect('/login');
	}


		
    }
    
    
	function profile(){
		/*$id = session()->get('uid');
		$user = User::where('uid' ,$id)
		->get();
		return view('admin.profile')->with('users', $user);*/

		   $client = new \GuzzleHttp\Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', 'localhost:3000/admin/profile');
        $promise = $client->sendAsync($request)->then(function ($response) {
        echo '' . $response->getBody();

});

$promise->wait();

    }
  
	function edit()
	{
		$id = session()->get('uid');
		$user = User::where('uid', $id)
		->get();
		return view('admin.updateprofile')->with('users', $user);

		/*$client = new \GuzzleHttp\Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', 'localhost:8000/admin/update/:id');
        $promise = $client->sendAsync($request)->then(function ($response) {
        echo '' . $response->getBody();

});

$promise->wait();*/


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

