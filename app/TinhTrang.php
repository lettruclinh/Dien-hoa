<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhTrang extends Model
{
    protected $table="tinhtrang";
    public function phieudat(){
        return $this->hasMany('App\PhieuDat', 'idPD', 'tinhtrang');
    }
}
