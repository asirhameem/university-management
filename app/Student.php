<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "student";
    
    protected $primaryKey = "student_id";
    
    public $timestamps = false;
}
