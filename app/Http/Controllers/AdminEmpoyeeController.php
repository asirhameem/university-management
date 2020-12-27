<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\message;
use App\warning;

use Illuminate\Support\Facades\DB;

class AdminEmpoyeeController extends Controller
{
    
	function employeeshow(){
        $user = User::where('type', '3')
					->get();
		return view('admin.employee')->with('users', $user);
    }
    function employeeinfo($id){
      $user = User::where('uid', $id)
					->get();
	    $employee = Employee::where('uid', $id)
       
					->get();
		return view('admin.employeeinfo')->with('users', $user)->with('employees', $employee);

    
	}
   function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('user')
        ->where('name', 'LIKE', "%{$query}%")
        ->where('type' , 3)
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
        $url = route('employee.info', $row->uid);
       $output .= '
       <li><a href="'.$url.'">'.$row->name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
}

	function employeeedit($id)
	{
		$user = User::where('uid', $id)
		->get();
  		$employee = Employee::where('uid', $id)
       
          ->get();
    return view('admin.employeeupdate')->with('users', $user)->with('employees', $employee);
	}


	function employeeupdate(Request $request, $id)
	{

    $request->validate([
      'gender'=>'required',
     'department'=>'required',
      'address'=>'required',
      'designation'=>'required',
       'joindate'=>'required',
       'phone'=>'required',
      'salary'=>'required'
    
        ]);
		
   Employee::where('uid', $id)->update(['gender' => $request->gender,
    'department' => $request->department,
    'address' => $request->address,
    'designation' => $request->designation,
    'joindate' => $request->joindate,
     'phone' => $request->phone,
    'salary' => $request->salary
  ]);

		return redirect()->route('employee.info', $id);

  
  }

   function employeedelete($id)
  {
         $user = User::find($id);

        if($user->delete()){
            $deletedRows = $user::where('uid', $id )->delete();
            return redirect()->route('adminhome.employeeshow');
        }else{
            return redirect()->route('employee.info',$id);
        }
    }


    

   

function employeemessage($id)
  {
    $user = User::where('uid', $id)
    ->get();
    return view('admin.message')->with('users', $user);
    }
    function employeesend(Request $request, $id)
  {
        $adminid= session()->get('uid');

        
        $user = new message();
        $user->senderid = $adminid;
        $user->receiverid = $id;
        $user->msgbody = $request->message;
        $user->save();
    return redirect()->route('adminhome.message', $id);
    }
   




    
    function employeewarn($id)
	{
		$user = User::where('uid', $id)
		->get();
		return view('admin.warning')->with('users', $user);
    }
    function employeewarning(Request $request, $id)
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
                ['uid' => $sv->uid,'cgpa' => $request->cgpa,'department' => $request->department,'dob' => $request->dob,'admission_date' => $request->admission_date,'student_status' => $request->student_status]
            );

                 return redirect()->route('adminhome.studentshow');





          
           



}

}