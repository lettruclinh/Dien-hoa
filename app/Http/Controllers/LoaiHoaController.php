<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiHoa;

class LoaiHoaController extends Controller
{
    //
    public function getDanhSach(){
        $loaihoa = LoaiHoa::all();
        return view('admin.loaihoa.danhsach',['loaihoa'=>$loaihoa]);
    }

    public function getThem(){
    	return view('admin.loaihoa.them');
    }

    public function getSua($id){
        $loaihoa = LoaiHoa::find($id);
        return view('admin.loaihoa.sua', ['loaihoa'=>$loaihoa]);
    }

    public function postThem(Request $Request){
    	//echo $Request->Ten;
        $this->validate($Request, ['tenLHoa'=>'required|max:100',
                                    'Mausac'=>'required|max:100',
                                  ],
                                    ['tenLHoa.required'=>'Bạn chưa nhập tên',
                                     'tenLHoa.max'=>'Tên không quá 100 kí tự',
                                     'Mausac.required'=>'Bạn chưa nhập màu sắc',
                                     'Mausac.max'=>'Tên không quá 100 kí tự',
                                    ]);
    	$loaihoa = new LoaiHoa;
        $loaihoa->tenLHoa = $Request->tenLHoa;
        $loaihoa->mausac_LH = $Request->mausac_LH;
        $loaihoa->save();
        return redirect('admin/loaihoa/them')->with('thongbao', 'Thêm thành công!');
        //echo changeTitle($Request->Ten);
    }

    public function postSua(Request $Request, $id){
        $loaihoa = LoaiHoa::find($id);
        $this->validate($Request, ['tenLHoa'=>'required|max:100',
                                    'Mausac'=>'required|max:100',
                                     ],
                                    ['tenLHoa.required'=>'Bạn chưa nhập tên',
                                     'tenLHoa.max'=>'Tên không quá 100 kí tự',
                                     'Mausac.required'=>'Bạn chưa nhập màu sắc',
                                     'Mausac.max'=>'Tên không quá 100 kí tự',
                                    ]);
        $loaihoa->tenLHoa = $Request->tenLHoa;
        $loaihoa->mausac_LH = $Request->mausac_LH;
        $loaihoa->save();
        return redirect('admin/loaihoa/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function getXoa($id){
        $loaihoa = LoaiHoa::find($id);
        $loaihoa->delete();
        return redirect('admin/loaihoa/danhsach')->with('thongbao', 'Xóa thành công!');
    }
}
