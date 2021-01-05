<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PhotoOrder;

class photoorderController extends Controller
{

   


    public function orderproduct($id, Request $req)
    {
        $order = new PhotoOrder();

                $order->photoid               = $req->id;
                $order->title         = $req->title;
                $order->ownerid           = $req->studentid;
                $order->email               = $req->email;

                if($order->save()){
                    return redirect()->route('home.studentskill');
                }
    }

    public function showorder($id, Request $req){

        $order = PhotoOrder::where('ownerid', $id)
        ->get();

        return view('profile.showorder' )->with('orders', $order);
        
    }

}
