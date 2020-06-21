<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = "mon_hocs";
    
    protected $fillable = [
        'ten_mon_hoc',
        'mo_ta', 
    ];
}
