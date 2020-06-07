<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhuyenMai;

class KhuyenMaiController extends Controller
{
    //
    public function getDanhSach(){
        $khuyenmai = KhuyenMai::all();
    	return view('admin.khuyenmai.danhsach',['khuyenmai'=>$khuyenmai]);
    }

    public function getThem(){
    	return view('admin.khuyenmai.them');
    }

    public function postThem(Request $Request){
    	//echo $Request->Ten;
        $this->validate($Request, ['TenKM'=>'required|unique:KhuyenMai,TenKM|min:3|max:100'],
                                    ['TenKM.required'=>'Bạn chưa nhập tên',
                                     'TenKM.min'=>'Tên phải có ít nhất 3 ký tự',
                                     'TenKM.max'=>'Tên không quá 100 kí tự',
                                     'TenKM.unique'=>'Tên khuyến mãi đã tồn tại'
                                    ]);
        $khuyenmai = new KhuyenMai;
        $khuyenmai->TenKM = $Request->TenKM;
        $khuyenmai->Mota = $Request->Mota;
        $khuyenmai->save();
        return redirect('admin/khuyenmai/them')->with('thongbao', 'Thêm thành công!');
        //echo changeTitle($Request->Ten);
    }

    public function getSua($id){
        $khuyenmai = KhuyenMai::find($id);
        return view('admin.khuyenmai.sua',['khuyenmai'=>$khuyenmai]);
    }
     public function postSua(Request $Request, $id){
        $khuyenmai = KhuyenMai::find($id);
        $this->validate($Request, ['TenKM'=>'required|unique:KhuyenMai,TenKM|min:3|max:100'],
                                    ['TenKM.required'=>'Bạn chưa nhập tên',
                                     'TenKM.min'=>'Tên phải có ít nhất 3 ký tự',
                                     'TenKM.max'=>'Tên không quá 100 kí tự',
                                     'TenKM.unique'=>'Tên khuyến mãi đã tồn tại'
                                    ]);
        $khuyenmai->TenKM = $Request->TenKM;
        $khuyenmai->Mota = $Request->Mota;
        $khuyenmai->save();
        return redirect('admin/khuyenmai/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getXoa($id){
        $khuyenmai = KhuyenMai::find($id);
        $khuyenmai->delete();
        return redirect('admin/khuyenmai/danhsach')->with('thongbao', 'Xóa thành công!');
    }
}
