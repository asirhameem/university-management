<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    //
    protected $table = "borrow";
    
    protected $primaryKey = "bid";
    
    public $timestamps = false;
}
