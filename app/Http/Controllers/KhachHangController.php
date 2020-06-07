<?php

namespace App\Http\Controllers;

use App\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    //
    public function getDanhSach(){
        $kh = KhachHang::all();
    	return view('admin.khachhang.danhsach',['kh'=>$kh]);
    }

    public function getThem(){
    	return view('admin.khachhang.them');
    }

    public function getSua(){
    	return view('admin.khachhang.sua');
    	
    }

    public function getXoa($id){
        $chude = KhachHang::find($id);
        $chude->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao', 'Xóa thành công!');
    }
}
