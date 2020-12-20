<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\message;
use App\warning;

use Illuminate\Support\Facades\DB;

class AdminStudentController extends Controller
{
    
	function studentshow(){
        $user = User::where('type', '1')
					->get();
		return view('admin.student')->with('users', $user);
    }
    function studentinfo($id){
      $user = User::where('uid', $id)
					->get();
	    $student = Student::where('uid', $id)
       
					->get();
		return view('admin.studentinfo')->with('users', $user)->with('students', $student);

    
	}
	function studentedit($id)
	{
		$user = User::where('uid', $id)
		->get();
  		$student = Student::where('uid', $id)
       
          ->get();
    return view('admin.studentupdate')->with('users', $user)->with('students', $student);
	}


	function studentupdate(Request $request, $id)
	{

    $request->validate([
      'cgpa'=>'required',
      'department'=>'required',
      'dob'=>'required',
      'admission_date'=>'required',
      'student_status'=>'required'
        ]);
		
   Student::where('uid', $id)->update(['cgpa' => $request->cgpa,
    'department' => $request->department,
    'dob' => $request->dob,
    'admission_date' => $request->admission_date,
    'student_status' => $request->student_status
  ]);

		return redirect()->route('student.info', $id);

  
  }

   function studentdelete($id)
  {
         $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('uid', $id )->delete();
            return redirect()->route('adminhome.studentshow');
        }else{
            return redirect()->route('student.info',$id);
        }
    }


    

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('user')
        ->where('username', 'LIKE', "%{$query}%")
        ->where('type' , 1)
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
        $url = route('student.info', $row->uid);
       $output .= '
       <li><a href="'.$url.'">'.$row->username.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
}

function studentmessage($id)
  {
    $user = User::where('uid', $id)
    ->get();
    return view('admin.message')->with('users', $user);
    }
    function studentsend(Request $request, $id)
  {
        $uid= session()->get('uid');
        
        $user = new message();
        $user->senderid = $uid;
        $user->receiverid = $id;
        $user->msgbody = $request->message;
        $user->save();
    return redirect()->route('student.info', $id);
    }
   




    
    function studentwarn($id)
	{
		$user = User::where('uid', $id)
		->get();
		return view('admin.warning')->with('users', $user);
    }
    function studentwarning(Request $request, $id)
	{
        $adminid = session()->get('uid');
       
        $user = new warning();
        $user->adminid = $adminid;
        $user->uid = $id;
        $user->warning = $request->warning;
        $user->save();
		return redirect()->route('student.info', $id);
    }
    
    
    public function addstudent(){
    
      return view('admin.addstudent');
    }

     
public function store(Request $request){

               $user = new User();
                $user->name= $request->name;
                $user->email= $request->email;
                $user->username= $request->username;
                $user->password= $request->password;
                $user->type=1;
                $user->dp= $request->dp;
                $user->status= $request->status;
                $user->save();

                 $sv = User::where('name', $request->name)
                  ->first();
                DB::table('student')->insert(
                ['uid' => $sv->uid,'cgpa' => $request->cgpa,'department' => $request->department,'dob' => $request->dob,'admission_date' => $request->admission_date,'student_status' => $request->student_status,]
            );

                 return redirect()->route('adminhome.studentshow');





          
           



}

}