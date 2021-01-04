<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "employee";
    
    protected $primaryKey = "eid";
    
    public $timestamps = false;
}
