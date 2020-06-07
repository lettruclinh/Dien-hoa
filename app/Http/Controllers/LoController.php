<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoController extends Controller
{
    //
    public function getDanhSach(){
    	return view('admin.lo.danhsach');
    }

    public function getThem(){
    	return view('admin.lo.them');
    }

    public function getSua(){
    	return view('admin.lo.sua');
    	
    }
}
