<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    //
    protected $table='ChuDe';

    public function sanpham()
    {
    	return $this->hasMany('App\SanPham','idCD','id');
    }

}
