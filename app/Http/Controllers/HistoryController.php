<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\message;
use App\warning;
use App\Library;
use App\Borrow;
use App\Course;
use App\Enroll;

use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
     
	function message(){
        $user = message::all();
		return view('history.message')->with('user', $user);
    }

    function warning(){
    $user = DB::table('warning')
        ->join('user', 'warning.uid', '=', 'user.uid')
        ->select('warning.*', 'user.username')
        ->get();
    return view('history.warning')->with('user', $user);
}

function library(){
        
        $library = Library::all();
                   
        return view('library.booklist')->with('librarys', $library);
}

    function bookinfo($id){
      $library = Library::where('lid', $id)
                    ->get();
        
        return view('library.bookinfo')->with('librarys', $library);

    
    }

    function bookedit($id)
    {
        $library = Library::where('lid', $id)
        ->get();
       
    return view('library.bookupdate')->with('librarys', $library);
    }


    function bookupdate(Request $request, $id)
    {

    $request->validate([
      'book_name'=>'required',
      'quantity'=>'required',
      'available'=>'required'
        ]);
        
   Library::where('lid', $id)->update(['book_name' => $request->book_name,
    'quantity' => $request->quantity,
    'available' => $request->available
  ]);

        return redirect()->route('adminhome.bookinfo', $id);

  
  }

  function bookdelete($id)
  {
         $library = Library::find($id);

        if($library->delete()){
            $deletedRows = $library::where('lid', $id )->delete();
            return redirect()->route('adminhome.library');
        }else{
            return redirect()->route('adminhome.bookinfo',$id);
        }
    }


    public function addbook(){
    
      return view('library.addbook');
    }

     
public function store(Request $request){

                 $library = new Library();
                $library->book_name= $request->book_name;
                $library->quantity= $request->quantity;
                $library->available= $request->available;
                
                $library->save();

                

                 return redirect()->route('adminhome.library');

}

function borrowlist(){
        
        $borrow = Borrow::all();
                   
        return view('library.borrowlist')->with('borrows', $borrow);
}


   
     
	function course(){
        
            $course = Course::all();
		return view('course.courselist')->with('courses', $course);
    }

     function courseinfo($id){
      $course = Course::where('cid', $id)
                    ->get();
        
        return view('course.courseinfo')->with('courses', $course);

    
    }

     function courseedit($id)
    {
        $course = Course::where('cid', $id)
        ->get();
       
    return view('course.courseupdate')->with('courses', $course);
    }


    function courseupdate(Request $request, $id)
    {

    $request->validate([
      'cname'=>'required',
      'cdescription'=>'required',
      
       'cstart'=>'required',
      'cend'=>'required',
      'cpic'=>'required'
        ]);
        
   Course::where('cid', $id)->update(['cname' => $request->cname,
    'cdescription' => $request->cdescription,
    'cstart' => $request->cstart,'cend' => $request->cend,'cpic' => $request->cpic
  ]);

        return redirect()->route('adminhome.courseinfo', $id);

  
  }

  function coursedelete($id)
  {
         $course = Course::find($id);

        if($course->delete()){
            $deletedRows = $course::where('cid', $id )->delete();
            return redirect()->route('adminhome.course');
        }else{
            return redirect()->route('adminhome.courseinfo',$id);
        }
    }

    function enrolllist(){
        
        $enroll = Enroll::all();
                   
        return view('course.enrolllist')->with('enrolls', $enroll);
}

    

function financials(){
    $user = DB::table('account')
        ->join('user', 'account.cid', '=', 'user.userid')
        ->join('service', 'account.serviceid', '=', 'service.serviceid')
        ->select('account.*', 'user.username', 'service.servicename')
        ->get();
    return view('history.transaction')->with('user', $user);
}
}
