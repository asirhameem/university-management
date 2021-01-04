<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "enroll";
    
    protected $primaryKey = "enid";
    
    public $timestamps = false;
}
