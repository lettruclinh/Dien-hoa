<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucThanhToan extends Model
{
    protected $table="hinhthuctt";
    public function phieudat(){
        return $this->hasMany('App\PhieuDat', 'idPD', 'id');
    }
}
