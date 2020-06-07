<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HinhThucVanChuyen;

class VanChuyenController extends Controller
{
    //
    public function getDanhSach(){
        $hinhthuc = HinhThucVanChuyen::all();
        return view('admin.vanchuyen.danhsach',['hinhthuc'=>$hinhthuc]);
    }

    public function getThem(){
    	return view('admin.vanchuyen.them');
    }

    public function getSua(){
    	return view('admin.vanchuyen.sua');
    	
    }
}
