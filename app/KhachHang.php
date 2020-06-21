<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KhachHang extends Model
{

    protected $table = "khach_hangs";
    
    protected $fillable = [
        'lop_hoc_id',
        'ho_ten', 
        'email', 
        'mat_khau',
        'tuoi',
        'dia_chi',
        'gioi_tinh',
        'anh_dai_dien'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
