<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    //
    protected $table='KhuyenMai';
        public function sanpham()
    {
    	return $this->hasMany('App\SanPham','idKM','id');
    }



}
