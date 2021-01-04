<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "notice";
    
    protected $primaryKey = "nid";
    
    public $timestamps = false;
}
