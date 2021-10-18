<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhasanxuat extends Model
{
    //
    protected $table = 'nhasanxuat';

    public function sanphamdienthoai()
    {
        return $this->hasMany('app\SanPham','MaSANPHAM','MaNHASANXUAT');
    }
}
