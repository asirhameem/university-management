<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //load dashboard with courses and staff

        $tid = session()->get('teacherId');
        $courses = DB::table('course')
            ->where('cteacher', '=', $tid)
            ->get();
        return view('Teacher.teacherDash')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //teachers all the courses and staff



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     *                                                        
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Teacher Profile Load
        $id = session()->get('id');
        $user = DB::table('users')
            ->join('teacher', 'users.uid', '=', 'teacher.uid')
            ->select('users.*', 'teacher.*')
            ->where('users.uid', '=', $id)
            ->first();


        return view('Teacher.teacherProfile')->with('users', $user);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request)
    {
        //update user info

        $request->validate([
            'name' => 'required|min:3',
            'password' => 'required|min:3',
            'confirmPassword' => 'required|same:password',
            'address' => 'required|min:5',
            'phone' => 'required|min:11'
        ]);

        $id = session()->get('id');
        $teacherId = session()->get('teacherId');
        // if ($request->has('name') || $request->has('password')) {
        if ($request->hasfile('dp')) {
            $file = $request->file('dp');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/profile-picture/', $filename);
        } else {
            $user = DB::table('users')
                ->where('uid', $id)
                ->first();
            $filename = $user->dp;
        }
        // $user->profile_pic = $filename;

        $save = DB::table('users')
            ->where('uid', $id)
            ->update([
                'name' => $request->name,
                'password' => $request->confirmPassword,
                'dp' => $filename
            ]);
        $teacher = DB::table('teacher')
            ->where('tid', $teacherId)
            ->update([
                'phone' => $request->phone,
                'address' => $request->address
            ]);

        if ($save > 0) {
            session()->put('name', $request->name);
        }
        return redirect()->route('teacher.profile');
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
