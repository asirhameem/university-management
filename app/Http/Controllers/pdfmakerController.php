<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class pdfmakerController extends Controller
{

    function gen()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>This is about course content. loremsnknsdcjdclawjidfnlkwdj</h1>');
        return $pdf->stream();
    }

}
