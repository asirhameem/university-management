<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function courseContent($id)
    {
        $contents = DB::table('content')
                        ->where('courseid',$id)
                        ->get();
        return view('Course.courseContent')->with('contents',$contents)->with('id',$id);
    }
    public function courseDetails($id)
    {
        $teacher = session()->get('teacherId');
        //dd($teacher);
        $details = DB::table('course')
            ->where('cid', $id)
            ->first();
        $students = DB::table('enroll')
            ->join('student', 'enroll.sid', '=', 'student.student_id')
            ->join('users', 'student.uid', '=', 'users.uid')
            ->select('enroll.*', 'student.*', 'users.*')
            ->where('users.type', '=', 'Student')
            ->where('users.status', '=', 'Active')
            ->where('enroll.courseid', '=', $id)
            ->where('enroll.instructorid', '=', $teacher)
            ->get();


        return view('Course.courseDetails')->with('details', $details)->with('students', $students);
    }
    public function courseNotice()
    {
        return view('Course.courseNotice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function download($path) {
        $file_path = public_path('uploads/course-content/'.$path);
        return response()->download($file_path);
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $content = new Content();
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/course-content/', $filename);
            $content->contentpath = $filename;
            $content->contentname = $request->name;
        $content->courseid = $id;
        }
        
        $content->save();
        return redirect()->back();
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
