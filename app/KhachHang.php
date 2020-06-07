<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table="khachhang";
    public $timestamps = false;
    public function loaikh(){
        return $this->belongsTo('App\LoaiKH', 'idLKH', 'id');
    }

    public function phieudat(){
        return $this->belongsTo('App\LoaiKH', 'idKH', 'id');
    }

    public function hoadonTL(){
        return $this->belongsTo('App\HoaDon_TL', 'idKH', 'id');
    }

    //1 function ket noi voi user
}
