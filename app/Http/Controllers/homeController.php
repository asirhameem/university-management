<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\studentRequest;
use Illuminate\Support\Facades\DB;
use Validator; 
use App\Post;


class homeController extends Controller
{
    public function index(Request $req){

    
		return view('profile.index',['email'=> $req->session()->get('email'), 'uid'=> $req->session()->get('uid')]);
    	
    }

    public function show($id, Request $req){
		//$students = $this->getStudentlist();
        //$std = Post::find($id);
        $student = Post::where('studentid', $id)
					->get();
	
    	return view('profile.showskill' )->with('students', $student);
    }

	public function details($id){
		
		$std = Post::find($id);
    	return view('home.skilldetails', $std);
    	
    }

    public function create(Request $req){
    
        return view('profile.skillupload', ['uid'=> $req->session()->get('uid')]);
	}
	
	public function store(studentRequest $req){
	
		if($req->hasFile('photo')){
			$file = $req->file('photo');

			if($file->move('uploads', $file->getClientOriginalName()))
			{
				$post = new Post();

                $post->title               = $req->title;
                $post->description         = $req->description;
                $post->studentid           = $req->uid;
                $post->photo               = $file->getClientOriginalName();

                if($post->save()){
                    return redirect()->route('profile.index');
                }
			}
			else
			{
				echo "error";
			}

		//return redirect()->route('home.stdlist');
	}
}

    public function display(){
    
    	$studentskills = Post::all();
    	return view('home.studentskill')->with('studentskill', $studentskills);
    }

    public function edit($id){

    	$std = Post::find($id);
    	return view('profile.skilledit', $std);
    }

    public function update($id, Request $req){
        
        if($req->hasFile('photo')){
			$file = $req->file('photo');

            if($file->move('uploads', $file->getClientOriginalName()))
            {
                $user = Post::find($id);

                $user->title     = $req->title;
                $user->photo     = $req->photo;
                $user->description         = $req->description;
        
                $user->save();
                return redirect()->route('profile.showskill');
            }
            else
            {
                echo "error";
            }
		
    }
}

    public function delete($id){
    	
    	$std = Post::find($id);
    	return view('profile.skilldelete', $std);
    }

    public function destroy($id, Request $req){
		
		$user = Post::find($id);
		$user->delete();
    	return redirect()->route('profile.index');
    }

    public function order($id){

    	$std = Post::find($id);
        return view('home.order', $std);
        
    }

    
   
}
