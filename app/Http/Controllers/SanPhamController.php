<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use App\SanPham;
use App\KieuDang;
use App\ChuDe;
use App\DonVi;
use App\KhuyenMai;
use App\Comment;
use App\User;

class SanPhamController extends Controller
{
    //
    public function getDanhSach(){
        $sanpham = SanPham::orderBy('id','DESC')->get();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    public function getThem(){
        $chude = ChuDe::all();
        $donvi = DonVi::all();
        $kieudang = KieuDang::all();
        $khuyenmai = KhuyenMai::all();
        return view('admin.sanpham.them',['chude'=>$chude,'donvi'=>$donvi,'kieudang'=>$kieudang,'khuyenmai'=>$khuyenmai]);
    }

    public function postThem(Request $Request){
    	//echo $Request->Ten;
        $this->validate($Request , ['TenChuDe'=>'required',
                                    'TenDonVi'=>'required',
                                    'TenKD'=>'required',
                                    'TenKM'=>'required',
                                    'TenSP'=>'required|min:3|unique:SanPham,TenSP',
                                    'Gia'=>'required',
                                    'Gia_KM'=>'required'
                                    ],
            ['TenChuDe.required'=>'Bạn chưa nhập chủ đề',
            'TenDonVi.required'=>'Bạn chưa nhập đơn vị',
            'TenKD.required'=>'Bạn chưa nhập kiểu dáng',
            'TenKM.required'=>'Bạn chưa nhập khuyến mãi',
            'TenSP.required'=>'Bạn chưa nhập tên sản phẩm',
             'TenSP.unique'=>'Tên sản phẩm đã tồn tại',
    		 'TenSP.min'=>'Tên sản phẩm phải có ít nhất 3 ký tự',
             'Gia.required'=>'Bạn chưa nhập Giá',
             'Gia_KM.required'=>'Bạn chưa nhập Giá khuyến mãi',
    		]);
    	$sanpham = new SanPham;
    	$sanpham->TenSP = $Request->TenSP;
        $sanpham->idCD = $Request->TenChuDe;
        $sanpham->idDV = $Request->TenDonVi;
        $sanpham->idKD = $Request->TenKD;
        $sanpham->idKM = $Request->TenKM;
        $sanpham->Y_Tuong = $Request->Y_Tuong;
        $sanpham->Mota = $Request->Mota;
        $sanpham->Gia = $Request->Gia;
        $sanpham->Gia_KM = $Request->Gia_Km;
        $sanpham->New = $Request->New;
        if($Request -> hasFile('Hinh') ){
            $file = $Request->file('Hinh');
            $name = $file->getClientoriginalName();
            $Hinh = rand(1, 999)."_".$name;
            
            $file->move('home-page/image/product/', $Hinh);
            $sanpham->Hinh = $Hinh;
        }
        else
        {
            $sanpham -> Hinh = "";
        }
        $sanpham->save();
        return redirect('admin/sanpham/them')->with('thongbao', 'Thêm thành công!');
        //echo changeTitle($Request->Ten);
    }

    public function getSua($id){
        $chude = ChuDe::all();
        $donvi = DonVi::all();
        $kieudang = KieuDang::all();
        $khuyenmai = KhuyenMai::all();
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua',['chude'=>$chude,'donvi'=>$donvi,'kieudang'=>$kieudang,'khuyenmai'=>$khuyenmai,'sanpham'=>$sanpham]);
    }

    public function postSua(Request $Request, $id){
        $sanpham = SanPham::find($id);  
        $this->validate($Request , ['TenChuDe'=>'required',
                                    'TenDonVi'=>'required',
                                    'TenKD'=>'required',
                                    'TenKM'=>'required',
                                    'TenSP'=>'required|min:3|unique:SanPham,TenSP',
                                    'Gia'=>'required',
                                    'Gia_KM'=>'required'
                                    ],
            ['TenChuDe.required'=>'Bạn chưa nhập chủ đề',
            'TenDonVi.required'=>'Bạn chưa nhập đơn vị',
            'TenKD.required'=>'Bạn chưa nhập kiểu dáng',
            'TenKM.required'=>'Bạn chưa nhập khuyến mãi',
            'TenSP.required'=>'Bạn chưa nhập tên sản phẩm',
             'TenSp.unique'=>'Tên sản phẩm đã tồn tại',
    		 'TenSP.min'=>'Tên sản phẩm phải có ít nhất 3 ký tự',
             'Gia.required'=>'Bạn chưa nhập Giá',
             'Gia_KM.required'=>'Bạn chưa nhập Giá khuyến mãi',
            ]);
    	$sanpham->TenSP = $Request->TenSP;
        $sanpham->idCD = $Request->TenChuDe;
        $sanpham->idDV = $Request->TenDonVi;
        $sanpham->idKD = $Request->TenKD;
        $sanpham->idKM = $Request->TenKM;
        $sanpham->Y_Tuong = $Request->Y_Tuong;
        $sanpham->Mota = $Request->Mota;


        if($Request -> hasFile('Hinh') ){
            $file = $Request->file('Hinh');
            $img_file_extension = $file->getClientOriginalExtension();
            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/sanpham/them')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }

            $name = $file->getClientOriginalName();
            $Hinh = str::random(4).'_'.$name;
            while(file_exists('home-page/image/product/'.$Hinh))
            {
                $Hinh = str::random(4).'_'.$name;
            }
            $file->move('home-page/image/product/', $Hinh);
            unlink('home-page/image/product/'.$sanpham->Hinh);
            $sanpham->Hinh = $Hinh;
        }

        $sanpham->Gia = $Request->Gia;
        $sanpham->Gia_KM = $Request->Gia_Km;
        $sanpham->New = $Request->New;
       
        $sanpham->save();
        return redirect('admin/sanpham/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getXoa($id){
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao', 'Xóa thành công!');
    }
}
