<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = "message";

    protected $primaryKey = "mid";
    public $timestamps = false;
}
