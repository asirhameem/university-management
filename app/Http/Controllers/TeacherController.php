<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use App\User;
use GuzzleHttp\Client;

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
    public function search(Request $request)
    {
        //teachers all the courses and staff
        $user = DB::table('users')
            ->where('uid', '=', $request->search)
            ->orWhere('name', $request->search)
            ->orWhere('email',$request->search)
            ->first();
        
        return view('Teacher.teacherSearch')->with('user',$user);
    }

    public function microservice($str){
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:3000/library/'.$str);
        $doctor = json_decode($response->getBody());
        return $doctor;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function studentDetails($id)
    {
        //
        $users = DB::table('student')
            ->join('users', 'student.uid', '=', 'users.uid')
            ->select('student.*', 'users.*')
            ->where('users.type', '=', 'Student')
            ->where('users.uid', '=', $id)            
            ->first();
        $library = $this->microservice($users->email);
        
        return view('Teacher.teacherStudentProfile')->with('users',$users)->with('library',$library); 
    }

    public function updateDetails(Request $request,$id)
    {
        //

        $request->validate([
            'name'=>'required|min:3',
            
            'password'=>'required|min:3',
            'dob' => 'required',
            'cgpa' => 'required',
            'sstatus' => 'required',
            'confirmPassword'=>'required|same:password' ]);

        $users = DB::table('users')
            ->where('users.uid', '=', $id)            
            ->update([
                'name' => $request->name,
                'status' => $request->status,
                'password' => $request->confirmPassword,
                
            ]);

        $users = DB::table('student')
                ->where('uid', '=', $id)            
                ->update([
                    'cgpa' => $request->cgpa,
                    'dob' => $request->dob,
            ]);
            
        
        return redirect()->back();
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
    public function account()
    {
        //
        $account = DB::table('payment')
                        ->get();
        return response($account);
        //dd($account);

    }

    public function banusers()
    {
        $banned = DB::table('student')
                    ->join('users', 'users.uid', '=', 'student.uid')
                    ->where('users.status','=','Inactive')
                    ->select('users.*', 'student.*')
                    ->get();
        return view('Teacher.teacherBanned')->with('users',$banned);
    }

    public function allcourses()
    {
        $courses = DB::table('course')
                        ->get();
        return view('Teacher.teacherCourses')->with('courses',$courses);
    }


    public function unbanusers($id)
    {
        $banned = DB::table('users')
                    ->where('uid','=',$id)
                    ->update([
                        'status' => 'Active'
                    ]);
        return redirect()->route('banned.users');
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
