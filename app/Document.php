<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "document";
    
    protected $primaryKey = "docid";
    
    public $timestamps = false;
}
