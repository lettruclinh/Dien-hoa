<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon_TL extends Model
{
    protected $table="HoaDon_TL";
    public function khachhang(){
        return $this->belongsTo('App\KhachHang', 'idKH', 'idHDTL');
    }

    public function phieuTL(){
        return $this->hasMany('App\PhieuThanhLy', 'idPTL', 'IDHDTL');
    }
}
