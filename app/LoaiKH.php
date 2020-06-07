<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiKH extends Model
{
    protected $table="LoaiKH";
    public function khachhang(){
        return $this->hasMany('App\KhachHang', 'idLKH', 'idLKH');
    }
}
