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
use App\Payment;
use PDF;


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
        
        /*$library = Library::all();
                   
        return view('library.booklist')->with('librarys', $library);*/

        
        $client = new \GuzzleHttp\Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', 'localhost:3000/admin/library');
        $promise = $client->sendAsync($request)->then(function ($response) {
        echo '' . $response->getBody();

});

$promise->wait();
}

    function bookinfo($id){
     /* $library = Library::where('lid', $id)
                    ->get();
        
        return view('library.bookinfo')->with('librarys', $library);*/
          $client = new \GuzzleHttp\Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', 'localhost:3000/admin/bookinfo/:id');
        $promise = $client->sendAsync($request)->then(function ($response) {
        echo '' . $response->getBody();

});

$promise->wait();


    
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
      

      $request->validate([
      
      'book_name'=>'required',
       'quantity'=>'required',
        'available'=>'required'
        ]);
                 $library = new Library();
                $library->book_name= $request->book_name;
                $library->quantity= $request->quantity;
                $library->available= $request->available;
                
                $library->save();

                

                 return redirect()->route('adminhome.library');

}




   
     
	function course(){
        
           $course = Course::all();
		return view('course.courselist')->with('courses', $course);

      /* $client = new \GuzzleHttp\Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', 'localhost:3000/admin/addcourse');
        $promise = $client->sendAsync($request)->then(function ($response) {
        echo '' . $response->getBody();

});

$promise->wait();*/
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

 public function addcourse(){
    
      return view('course.addcourse');
    }

    public function storecourse(Request $request){
      

      $request->validate([
      
      'cname'=>'required',
       'cdescription'=>'required',
        'cteacher'=>'required',
        'cstart'=>'required',
       'cend'=>'required',
        'cpic'=>'required'
        ]);
                 $course = new Course();
                $course->cstart= $request->cstart;
                $course->cdescription= $request->cdescription;
                $course->cteacher= $request->cteacher;
                $course->cstart= $request->cstart;
                $course->cend= $request->cend;
                $course->cpic= $request->cpic;
                
                $course->save();

                

                 return redirect()->route('adminhome.course');

}




function borrowlist(){
        
       /* $borrow = Borrow::all();
                   
        return view('library.borrowlist')->with('borrows', $borrow);*/
         $borrow = $this->get_borrow_data();
         return view('library.borrowlist')->with('borrow', $borrow);
}
function get_borrow_data()
    {
     $borrow = DB::table('borrow')
         
         ->get();
     return $borrow;
    }

     function borrowpdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_borrow_data_to_html());
     return $pdf->stream();
    }

     function convert_borrow_data_to_html()
    {
      $borrow = $this->get_borrow_data();
     $output =' <h3 align="center">Borrow List</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%"> Borrow ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Book ID</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Book Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Borrow Date</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Return Date</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Student ID</th>
   
   </tr>
     ';
      foreach($borrow as $borrows)
     {
      $output .=' <tr>
       <td style="border: 1px solid; padding:12px;">'.$borrows->bid.'</td>
       <td style="border: 1px solid; padding:12px;">'.$borrows->lid.'</td>
       <td style="border: 1px solid; padding:12px;">'.$borrows->bookname.'</td>
       <td style="border: 1px solid; padding:12px;">'.$borrows->bdate.'</td>
       <td style="border: 1px solid; padding:12px;">'.$borrows->rdate.'</td>
       <td style="border: 1px solid; padding:12px;">'.$borrows->sid.'</td>
       
      </tr>
      ';}
      $output .= '</table>';
     return $output;
    }


function financials(){
        
       
         $payment = $this->get_customer_data();
         return view('payment.paymentlist')->with('payment', $payment);
}

function get_customer_data()
    {
     $payment = DB::table('payment')
         
         ->get();
     return $payment;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
      $payment = $this->get_customer_data();
     $output =' <h3 align="center">Payment List</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Payment ID</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Student ID</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Payment Ammount</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Payment Date</th>
   
   </tr>
     ';
      foreach($payment as $payments)
     {
      $output .=' <tr>
       <td style="border: 1px solid; padding:12px;">'.$payments->pid.'</td>
       <td style="border: 1px solid; padding:12px;">'.$payments->sid.'</td>
       <td style="border: 1px solid; padding:12px;">'.$payments->pamount.'</td>
       <td style="border: 1px solid; padding:12px;">'.$payments->pdate.'</td>
       
      </tr>
      ';}
      $output .= '</table>';
     return $output;
    }





}
