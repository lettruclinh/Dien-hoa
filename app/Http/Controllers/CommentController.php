<?php

namespace App\Http\Controllers;
use App\Quotation;
use Illuminate\Http\Request;
use App\DonVi;
use App\KhuyenMai;
use App\KieuDang;
use App\ChuDe;
use App\SanPham;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{

    public function getXoa($id, $idTinTuc){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/sanpham/sua/' .$idTinTuc)->with('thongbao', 'Xóa bình luận thành công!');
    }
    public function postcomment($id, Request $Request){
        $idSanPham = $id;
     //   $SanPham = SanPham::find($id);
        $comment = new Comment;
        $comment->idSanPham = $idSanPham;
        $comment->idUser = Auth::user()->id;
        $comment->NoiDung = $Request->NoiDung;
        $comment->save();
        return back();
    } 
    

}
