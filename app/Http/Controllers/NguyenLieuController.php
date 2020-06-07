<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguyenLieuController extends Controller
{
    //
    public function getDanhSach(){
    	return view('admin.nguyenlieu.danhsach');
    }

    public function getThem(){
    	return view('admin.nguyenlieu.them');
    }

    public function getSua(){
    	return view('admin.nguyenlieu.sua');
    	
    }
}
