<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator; 
use App\Course;


class courseregController extends Controller
{

    public function courses(Request $req){

        $courses = Course::all();
    	return view('course_registration.courses')->with('course', $courses);
		
    }

    public function details($id){
		
		$std = Course::find($id);
    	return view('course_registration.coursedetails', $std);
    	
    }

    public function register($id, Request $req){

    	$std = Course::find($id);
        return view('course_registration.register', $std, ['semail'=> $req->session()->get('email')]);
        
    }

   

}