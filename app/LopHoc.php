<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = "lop_hocs";

    protected $fillable = [
        'ten_lop_hoc',
        'mo_ta',
        'hinh_anh',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'gia',
        'giam_gia'
    ];

    public function MonHoc()
    {
        return $this->belongsTo('App\MonHoc','mon_hoc_id','id');
    }

    public function HuanLuyenVien()
    {
        return $this->belongsTo('App\HuanLuyenVien','huan_luyen_vien_id','id');
    }
    public function BuoiHoc()
    {
        return $this->hasMany('App\BuoiHoc','id','lop_hoc_id');
    }

    public function KhachHang()
    {
        return $this->hasMany('App\KhachHang','id','lop_hoc_id');
    }
}
