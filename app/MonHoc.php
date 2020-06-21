<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = "posts";
    
    protected $fillable = [
        'ten_mon_hoc',
        'mo_ta', 
    ];
}
