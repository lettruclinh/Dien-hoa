<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonVi extends Model
{
    //
    protected $table='DonVi';

    public function sanpham()
    {
    	return $this->hasMany('App\SanPham','idDV','id');
    }


}
