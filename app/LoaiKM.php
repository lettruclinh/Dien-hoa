<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiKM extends Model
{
    //
    protected $table='LoaiKM';
    public function khuyenmai()
    {
    	return $this->belongsTo('App\LoaiKM','idLKM','idKM');
    }

}
