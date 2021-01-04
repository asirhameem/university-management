<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "payment";
    
    protected $primaryKey = "pid";
    
    public $timestamps = false;
}
