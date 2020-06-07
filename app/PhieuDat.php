<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhieuDat extends Model
{
    protected $table='phieudat';
    public function khachhang()
    {
    	return $this->belongsTo('App\KhachHang','idKH','id');
    }

    public function sanpham()
    {
    	return $this->hasMany('App\SanPham','idSP','id');
    }

    public function hinhthucvanchuyen()
    {
    	return $this->belongsTo('App\HinhThucVanChuyen','idHTVC','id');
    }

    public function hinhthucthanhtoan()
    {
    	return $this->belongsTo('App\HinhThucThanhToan','idHTTT','id');
    }

    public function tinhtrang()
    {
    	return $this->belongsTo('App\TinhTrang','tinhtrang','id');
    }

    public function hoadonxuat()
    {
    	return $this->belongsTo('App\HoaDonXuat','idHDX','id');
    }

    public function nhanvien()
    {
    	return $this->belongsTo('App\NhanVien','idNV','id');
    }

    public function chitietpd()
    {
    	return $this->hasMany('App\ChiTietPD','id','id');
    }
}
