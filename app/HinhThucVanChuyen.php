<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucVanChuyen extends Model
{
    protected $table='hinhthucvc';
    public function phieudat(){
        return $this->hasMany('App\PhieuDat', 'idPD', 'id');
    }
}
