<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class loginController extends Controller
{
    public function index(){
    	return view('login.studentlogin');
    }

    public function verify(Request $req){


		$user = DB::table('Users')
                    ->where('email', $req->email)
					->where('password', $req->password)
					->get('uid');

		$type = DB::table('Users')
					->where('email', $req->email)
					->where('password', $req->password)
					 ->get('type');
		
				/*foreach($type as $usertype)
				{
					$usertype= $usertype->type ;
		
				}	*/		
					
			if(count($user) > 0){

			$req->session()->put('email', $req->email);
			$req->session()->put('uid', $user[0]->uid);
            return redirect('/profile');
			
    	}else{
			$req->session()->flash('msg', 'invalid username or password');
    		return redirect('/login');
    	}
    }
}
