<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    protected $table='SanPham';
    public function chude()
    {
    	return $this->belongsTo('App\ChuDe','idCD','id');
    }

    public function donvi()
    {
    	return $this->belongsTo('App\DonVi','idDV','id');
    }

    public function kieudang()
    {
    	return $this->belongsTo('App\KieuDang','idKD','id');
    }

    public function khuyenmai()
    {
    	return $this->belongsTo('App\KhuyenMai','idKM','id');
    }

    public function comment(){
    	return $this->hasMany('App\Comment', 'idSanPham', 'id');
    }

}
