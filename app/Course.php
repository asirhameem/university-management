<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "course";
    
    protected $primaryKey = "cid";
    
    public $timestamps = false;
}
