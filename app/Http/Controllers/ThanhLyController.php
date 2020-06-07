<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanhLyController extends Controller
{
    //
    public function getDanhSach(){
    	return view('admin.thanhly.danhsach');
    }

    public function getThem(){
    	return view('admin.thanhly.them');
    }

    public function getSua(){
    	return view('admin.thanhly.sua');
    	
    }
}
