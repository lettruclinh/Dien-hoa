<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuDe;

class ChuDeController extends Controller
{
    //
    public function getDanhSach(){
        $chude = ChuDe::all();
    	return view('admin.chude.danhsach',['chude'=>$chude]);
    }

    public function getThem(){
    	return view('admin.chude.them');
    }

    public function postThem(Request $Request){
    	//echo $Request->Ten;
    	$this->validate($Request , ['TenChuDe'=>'required|unique:ChuDe,TenChuDe|min:3|max:100'],
    		['TenChuDe.required'=>'Bạn chưa nhập tên',
    		 'TenChuDe.min'=>'Tên phải có ít nhất 3 ký tự',
             'TenChuDe.max'=>'Tên không quá 100 kí tự',
             'TenChuDe.unique'=>'Tên chủ đề đã tồn tại'
    		]);
    	$chude = new ChuDe;
        $chude->TenChuDe = $Request->TenChuDe;
        $chude->save();
        return redirect('admin/chude/them')->with('thongbao', 'Thêm thành công!');
        //echo changeTitle($Request->Ten);
    }

    public function getSua($id){
        $chude = ChuDe::find($id);
        return view('admin.chude.sua', ['chude'=>$chude]);
    }
     public function postSua(Request $Request, $id){
        $chude = ChuDe::find($id);
        $this->validate($Request, ['TenChuDe'=>'required|unique:ChuDe,TenChuDe|min:3|max:100'],
                                    ['TenChuDe.required'=>'Bạn chưa nhập tên',
                                     'TenChuDe.min'=>'Tên phải có ít nhất 3 ký tự',
                                     'TenChuDe.max'=>'Tên không quá 100 kí tự',
                                     'TenChuDe.unique'=>'Tên chủ đề đã tồn tại'
                                    ]);
        $chude->TenChuDe = $Request->TenChuDe;
        $chude->save();
        return redirect('admin/chude/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getXoa($id){
        $chude = ChuDe::find($id);
        $chude->delete();
        return redirect('admin/chude/danhsach')->with('thongbao', 'Xóa thành công!');
    }
}
