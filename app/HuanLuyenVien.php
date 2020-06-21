<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class HuanLuyenVien extends Model
{
    protected $table = "huan_luyen_viens";
    protected $fillable = [
        'mon_hoc_id',
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
