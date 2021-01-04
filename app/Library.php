<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "library";
    
    protected $primaryKey = "lid";
    
    public $timestamps = false;
}
