<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator; 
use App\Enroll;


class enrollController extends Controller
{
    public function enroll($id, Request $req)
    {
       // $course = Enroll::find($id);
        $course = new Enroll();

                $course->courseid              = $req->courseid;
                $course->cname                   = $req->coursename;
                $course->instructorid           = $req->teacher;
                $course->semail               = $req->studentemail;

                $course->save();
                    return redirect()->route('profile.index');
                
    }

    public function showregister($email)
    {
        $showcourse = Enroll::where('semail', $email)
					->get();
	
    	return view('course_registration.showregistration' )->with('showcourses', $showcourse);
    }

    public function dropcourse($id){

    	$drop = Enroll::find($id);
    	return view('course_registration.dropcourse', $drop);
    }

    public function drop($id, Request $req){
		
		$course = Enroll::find($id);
		$course->delete();
    	return redirect()->route('profile.index');
    }

}