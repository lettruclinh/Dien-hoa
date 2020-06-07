<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoChiTiet extends Model
{
    //
    protected $table='CoChiTiet';
    public function nguyenlieu(){
        return $this->belongsTo('App\NguyenLieu', 'idNL', 'idNL');
    }

    public function lo(){
        return $this->belongsTo('App\Lo', 'idLo', 'idLo');
    }
}
