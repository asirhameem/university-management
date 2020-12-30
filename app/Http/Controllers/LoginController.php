<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //

    public function LoadFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function FacebookResponse()
    {
        $user = Socialite::driver('facebook')->user();
        //print_r($user);
        return view('Teacher.teacherDash');
    }

}
