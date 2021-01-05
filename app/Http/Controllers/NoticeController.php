<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        return view('profile.notice');
    }

    //Ajax Request
    public function getUsers($id=0)
    {
        if($id == 0)
        {
            $notices = Notice::orderby('nid','asc')
            ->select('*')
            ->get();
        }
        else
        {
            $notices = Notice::select('*')
            ->where('nid',$id)
            ->get();
        }

        $userData['data'] = $notices;

        echo json_encode($userData);
        exit;
    }

}
