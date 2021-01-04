<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "teacher";
    
    protected $primaryKey = "tid";
   
    public $timestamps = false;
}
