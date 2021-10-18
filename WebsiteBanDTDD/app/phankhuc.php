<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phankhuc extends Model
{
    //
    protected $table = 'phankhuc';

    public function sanphamdienthoai()
    {
        return $this->hasMany('app\SanPham','MaSANPHAM','MaPHANKHUC');
    }
}
