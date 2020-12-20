<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warning extends Model
{
    protected $table = "warning";

    protected $primaryKey = "warnid";
    public $timestamps = false;

}
