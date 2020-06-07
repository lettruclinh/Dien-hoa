<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonXuat extends Model
{
    protected $table="hoadonxuat";
    public function phieudat(){
        return $this->hasMany('App\PhieuDat', 'idPD', 'id');
    }
}
