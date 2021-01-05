<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\studentRequest;
use Illuminate\Support\Facades\DB;
use Validator; 
use App\Skill;
use App\Student;


class homeController extends Controller
{
    public function index(Request $req){

    
		return view('profile.index',['email'=> $req->session()->get('email'), 'uid'=> $req->session()->get('uid')]);
    	
    }

    public function show($id, Request $req){
		//$students = $this->getStudentlist();
        //$std = Skill::find($id);
        $student = Skill::where('studentid', $id)
					->get();
	
    	return view('profile.showskill' )->with('students', $student);
    }

	public function details($id){
		
		$std = Skill::find($id);
    	return view('home.skilldetails', $std);
    	
    }

    public function create(Request $req){
    
        return view('profile.skillupload', ['uid'=> $req->session()->get('uid')]);
	}
	
	public function store(Request $req){

       
	
		if($req->hasFile('photo')){
			$file = $req->file('photo');

			if($file->move('uploads', $file->getClientOriginalName()))
			{
				$skill = new Skill();

                $skill->title               = $req->title;
                $skill->description         = $req->description;
                $skill->studentid           = $req->uid;
                $skill->photo               = $file->getClientOriginalName();

                if($skill->save()){
                    return redirect()->route('profile.index');
                }
			}
			else
			{
				echo "error";
			}

		
    }
   
}

    public function display(){
    
    	$studentskills = Skill::all();
    	return view('home.studentskill')->with('studentskill', $studentskills);
    }

    public function edit($id){

    	$std = Skill::find($id);
    	return view('profile.skilledit', $std);
    }

    public function update($id, Request $req){
        
        if($req->hasFile('photo')){
			$file = $req->file('photo');

            if($file->move('uploads', $file->getClientOriginalName()))
            {
                $user = Skill::find($id);

                $user->title     = $req->title;
                $user->photo     = $req->photo;
                $user->description         = $req->description;
        
                $user->save();
                return redirect()->route('profile.index');
            }
            else
            {
                echo "error";
            }
		
    }
}

    public function delete($id){
    	
    	$std = Skill::find($id);
    	return view('profile.skilldelete', $std);
    }

    public function destroy($id, Request $req){
		
		$user = Skill::find($id);
		$user->delete();
    	return redirect()->route('profile.index');
    }

    public function order($id){

    	$std = Skill::find($id);
        return view('home.order', $std);
        
    }

    public function info($id, Request $req)
    {
        $student = Student::where('studentid', $id)
        ->get();

            return view('profile.index' )->with('students', $student);
    }

    
   
}
