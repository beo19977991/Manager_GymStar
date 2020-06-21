<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuoiHoc extends Model
{
    protected $table = "buoi_hocs";

    protected $fillable = [
        'thoi_gian_bat_dau',
        'thoi_gian_ket_thuc'
    ];

    public function LoaiBaiTap()
    {
        return $this->belongsToMany('App\LoaiBaiTap');
    }

    public function LopHoc()
    {
        return $this->belongsTo('App\LopHoc', 'id', 'lop_hoc_id');
    }
}
