<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class khachhang extends Model
{
    //
    protected $table = 'khachhang';

    public function donhang()
    {
        return $this->belongsTo('app\donhang','SoDONHANG','MaKHACHHANG');
    }
}
