<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiTap extends Model
{
    protected $table = "bai_taps";

    protected $fillable = [
        'ten_bai_tap',
        'video', 
        'mo_ta_bai_tap'
    ];

    public function LoaiBaiTap()
    {
        return $this->belongsTo('App\LoaiBaiTap','id','loai_bai_tap_id');
    }
}
