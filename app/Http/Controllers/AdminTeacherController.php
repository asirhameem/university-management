<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
use App\message;
use App\warning;

use Illuminate\Support\Facades\DB;

class AdminTeacherController extends Controller
{
    
	function teachershow(){
        $user = User::where('type', '2')
					->get();
		return view('admin.teacher')->with('users', $user);
    }
    function teacherinfo($id){
      $user = User::where('uid', $id)
					->get();
	    $teacher = Teacher::where('uid', $id)
       
					->get();
		return view('admin.teacherinfo')->with('users', $user)->with('teachers', $teacher);

    
	}

  function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('user')
        ->where('name', 'LIKE', "%{$query}%")
        ->where('type' , 2)
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
        $url = route('teacher.info', $row->uid);
       $output .= '
       <li><a href="'.$url.'">'.$row->name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
}

	function teacheredit($id)
	{
		$user = User::where('uid', $id)
		->get();
  		$teacher = Teacher::where('uid', $id)
       
          ->get();
    return view('admin.teacherupdate')->with('users', $user)->with('teachers', $teacher);
	}


	function teacherupdate(Request $request, $id)
	{

    $request->validate([
      'department'=>'required',
      'designation'=>'required',
      'salary'=>'required',
      'joindate'=>'required',
      'address'=>'required',
      'gender'=>'required',
      'phone'=>'required'
        ]);
		
   Teacher::where('uid', $id)->update(['department' => $request->department,
    'designation' => $request->designation,
    'salary' => $request->salary,
    'joindate' => $request->joindate,
    'address' => $request->address,
    'gender' => $request->gender,
    'phone' => $request->phone
  ]);

		return redirect()->route('teacher.info', $id);

  
  }

   function teacherdelete($id)
  {
         $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('uid', $id )->delete();
            return redirect()->route('adminhome.teachershow');
        }else{
            return redirect()->route('teacher.info',$id);
        }
    }


    

    

function teachermessage($id)
  {
    $user = User::where('uid', $id)
    ->get();
    return view('admin.message')->with('users', $user);
    }
    function teachersend(Request $request, $id)
  {
        $adminid= session()->get('uid');

        
        $user = new message();
        $user->senderid = $adminid;
        $user->receiverid = $id;
        $user->msgbody = $request->message;
        $user->save();
    return redirect()->route('adminhome.message', $id);
    }
   




    
    function teacherwarn($id)
	{
		$user = User::where('uid', $id)
		->get();
		return view('admin.warning')->with('users', $user);
    }
    function teacherwarning(Request $request, $id)
	{

     $request->validate([
      
      'warning'=>'required'
        ]);
        $adminid = session()->get('uid');
       
        $user = new warning();
        $user->adminid = $adminid;
        $user->uid = $id;
        $user->warning = $request->warning;
        $user->save();
		return redirect()->route('adminhome.warning', $id);
    }
    
    
    public function addteacher(){
    
      return view('admin.addteacher');
    }

     
public function store(Request $request){

   /*$request->validate([
    'name'=>'required',
      'email'=>'required',
      'username'=>'required',
      'password'=>'required',
      'type'=>'required',
      'dp'=>'required',
      'status'=>'required',

    'department'=>'required',
      'designation'=>'required',
      'salary'=>'required',
      'joindate'=>'required',
      'address'=>'required',
      'gender'=>'required',
      'phone'=>'required'
        ]);*/

                 $user = new User();
                $user->name= $request->name;
                $user->email= $request->email;
                $user->username= $request->username;
                $user->password= $request->password;
                $user->type=2;
                $user->dp= $request->dp;
                $user->status= $request->status;
                $user->save();

                 $sv = User::where('name', $request->name)
                  ->first();
                DB::table('teacher')->insert(
                ['uid' => $sv->uid,'department' => $request->department,'designation' => $request->designation,'salary' => $request->salary,'joindate' => $request->joindate,'address' => $request->address,'gender' => $request->gender,'phone' => $request->phone]
            );

                 return redirect()->route('adminhome.teachershow');



}

}