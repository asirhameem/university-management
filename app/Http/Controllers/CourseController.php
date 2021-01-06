<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade as PDF;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notice;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf as WriterPdf;

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
    public function courseNotice($id)
    {
        $notices = DB::table('notice')
                        ->where('cid',$id)
                        ->get();
        return view('Course.courseNotice')->with('notices',$notices)->with('id',$id);
    }

    public function noticeStore(Request $request,$id)
    {
        $notice = new Notice();
        $notice->noticename = $request->name;
        $notice->noticedescription = $request->about;
        $notice->cid = $id;
        $notice->save();

        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export($id)
    {
        //excel
        $teacher = session()->get('teacherId');
        $students = DB::table('enroll')
            ->join('student', 'enroll.sid', '=', 'student.student_id')
            ->join('users', 'student.uid', '=', 'users.uid')
            ->select('enroll.*', 'student.*', 'users.*')
            ->where('users.type', '=', 'Student')
            ->where('users.status', '=', 'Active')
            ->where('enroll.courseid', '=', $id)
            ->where('enroll.instructorid', '=', $teacher)
            ->get();
        $pdf = PDF::loadView('Course.courseDetailsTable',compact('students'));
        return $pdf->download('itsolutionstuff.pdf');
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
