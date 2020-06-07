<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
    
    public function getDanhSach(){
    	$slide = Slide::all();
    	return view('admin.slide.danhsach',['slide'=>$slide]);
    }
    public function getSua($id){
        
        $slide = Slide::find($id);
        return view('admin.slide.sua', ['slide'=>$slide]);
    }
     public function postSua(Request $Request, $id){
        $this->validate($Request , ['Ten'=>'required'],
            ['Ten.required'=>'Bạn chưa nhập tên']);
        $slide = Slide::find($id);
        $slide->Ten = $Request->Ten;
        if($Request->has('Link'))
            $slide->link = $Request->Link;
        if($Request -> hasFile('Hinh') ){
            $file = $Request->file('Hinh');
            $name = $file->getClientoriginalName();
            $Hinh = rand(1, 999)."_".$name;
            
            $file->move('home-page/image/slide/', $Hinh);
            unlink('home-page/image/slide/'.$slide->Hinh);
            $slide->Hinh = $Hinh;
        }
       
        $slide->save();
        return redirect('admin/slide/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }
    public function getThem(){
    	return view('admin.slide.them');
    }
    public function postThem(Request $Request){
    	//echo $Request->Ten;
    	$this->validate($Request , ['Ten'=>'required'],
    		['Ten.required'=>'Bạn chưa nhập tên']);
    	$slide = new Slide;
    	$slide->Ten = $Request->Ten;
        if($Request->has('Link'))
            $slide->link = $Request->Link;
        if($Request -> hasFile('Hinh') ){
            $file = $Request->file('Hinh');
            $name = $file->getClientOriginalName();
            $Hinh = rand(1, 999)."_".$name;
            
            $file->move('home-page/image/slide/', $Hinh);
            $slide->Hinh = $Hinh;
        }
        else
        {
            $slide -> Hinh = "";
        }
        $slide->save();
        return redirect('admin/slide/them')->with('thongbao', 'Thêm thành công!');
        //echo changeTitle($Request->Ten);
    }
    public function getXoa($id){
        $slide = Slide::find($id);
        $slide->delete();
        return redirect('admin/slide/danhsach')->with('thongbao', 'Xóa thành công!');
    }

}
