<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'cid', 'noticename', 'description'
    ];
   // protected $primaryKey = "nid";
	//public $timestamps = false;
}
