<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBaiTap extends Model
{
    protected $table = "loai_bai_taps";

    protected $fillable = [
        'ten_loai_bai_tap',
    ];

    public function BuoiTap()
    {
        return $this->belongsToMany('App\BuoiTap');
    }

    public function BaiTap()
    {
        return $this->hasMany('App\BaiTap', 'loai_bai_tap_id','id');
    }
}
