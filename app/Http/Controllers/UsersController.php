<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return the view of the registration page.
        return view('User.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $req)
    {
        //render the view of login page;
        //$req->session()->flash('msg','Your are good to go.');
        return view('User.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store the user to database.

        $request->validate([
            'name'=>'required|min:3',
            'username'=>'required|min:3',
            'password'=>'required|min:3',
            'email'=>'required',
            'confirmPassword'=>'required|same:password' ]);


        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->dp = '';
        $user->type = 'Teacher';
        $user->status = 'Inactive';
        $save = $user->save();
        
        if($save)
        {
            $request->session()->flash('success', 'User profile created successfully');
            return redirect()->route('user.login');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
