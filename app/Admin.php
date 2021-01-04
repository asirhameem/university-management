<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "admin";
    
    protected $primaryKey = "admin_id";
    
    public $timestamps = false;
}
