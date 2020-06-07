<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table="NhanVien";
    public function lo(){
        return $this->belongsTo('App\Lo', 'idNV', 'idNV');
    }

    public function phieuTL(){
        return $this->hasMany('App\PhieuThanhLy', 'idNV', 'idNV');
    }

    public function phieudat(){
        return $this->hasMany('App\PhieuDat', 'idNV', 'idNV');
    }

    //1 function ket noi user
}
