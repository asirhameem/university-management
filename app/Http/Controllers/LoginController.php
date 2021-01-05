<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use App\User;
class LoginController extends Controller
{
    //

    public function LoadFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function FacebookResponse()
    {
        $info = Socialite::driver('facebook')->user();
        //print_r($user);
        $user = new User();
        $user->name = $info->name;
        $user->username = '';
        $user->password = '';
        $user->email = $info->email;
        $user->dp = $info->avatar;
        $user->type = 'Teacher';
        $user->status = 'Inactive';
        $save = $user->save();
        
        if($save){
            return redirect()->route('teacher.dashboard');
        }else{
            return redirect()->route('user.login');
        }
        
    }

    public function LoginNormal(Request $request)
    {
        $user  = User::where('email', $request->email)
                        ->where('password', $request->password)
                        ->first();
        $teacher = DB::table('teacher')
                        ->where('teacher.uid','=',$user->uid)
                        ->first();
        if($user)
        {
            $request->session()->put('email', $user->email);
            $request->session()->put('type', $user->type);
            $request->session()->put('name', $user->name);
            $request->session()->put('id',$user->uid);
            $request->session()->put('teacherId',$teacher->tid);
            //return view('Teacher.teacherDash')->with('user',$user);
            return redirect()->route('teacher.dashboard');
        }else{
            $request->session()->flash('msg', 'Please provide valid Email & Password');
    		return redirect()->route('user.login');
        }
    }

}
