<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Borrow;


class BorrowController extends Controller
{

   public function store(Request $req)
   {
    $borrow = new Borrow();

    $borrow->bookname               = $req->name;
    $borrow->lid         = $req->lid;
    $borrow->bdate           = $req->bdate;
    $borrow->rdate           = $req->rdate;
    $borrow->semail           = $req->studentemail;
    

    if($borrow->save()){
        return redirect()->route('profile.index');
    }
   }

   public function show($email, Request $req)
   {
    $showbooks = Borrow::where('semail', $email)
    ->get();

return view('library.showbooks' )->with('showbook', $showbooks);
   }

}
