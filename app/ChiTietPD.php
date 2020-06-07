<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietPD extends Model
{
    protected $table='chitietpd';
    public function phieudat(){
        return $this->belongsTo('App\PhieuDat', 'id_pd', 'id');
    }

    public function sanpham(){
        return $this->belongsTo('App\SanPham', 'id_sp', 'id');
    }
}
