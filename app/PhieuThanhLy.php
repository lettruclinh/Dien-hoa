<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuThanhLy extends Model
{
    protected $table="HoaDon_TL";
    public function nhanvien(){
        return $this->hasMany('App\NhanVien', 'idNV', 'idPTL');
    }

    public function hoadonTL(){
        return $this->belongsTo('App\HoaDon_TL', 'idPTL', 'idPTL');
    }

    public function lo(){
        return $this->hasMany('App\Lo', 'idPTL', 'idPTL');
    }

    public function chitietTL(){
        return $this->hasMany('App\ChiTietTL', 'idPTL', 'idPTL');
    }
}
