<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table = 'sanphamdienthoai';

    public function nhasanxuat()
    {
        return $this->belongsTo('app\nhasanxuat','MaNHASANXUAT','MaSANPHAM');
    }

    public function phankhuc()
    {
        return $this->belongsTo('app\phankhuc','MaPHANKHUC','MaSANPHAM');
    }
}
