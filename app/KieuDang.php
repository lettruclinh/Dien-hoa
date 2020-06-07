<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KieuDang extends Model
{
    //
    protected $table='KieuDang';

    public function sanpham()
    {
    	return $this->hasMany('App\SanPham','idKD','id');
    }
}
