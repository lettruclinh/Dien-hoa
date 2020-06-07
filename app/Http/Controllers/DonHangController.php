<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PhieuDat;
use App\SanPham;
use App\GioHang;
use App\ChiTietPD;
use App\KhachHang;
use App\HinhThucThanhToan;
use App\HinhThucVanChuyen;
use Session;

class DonHangController extends Controller
{
    //
    public function getDanhSach(){
        $order = PhieuDat::all();
      //  $order = DB::table('phieudat')->select('*');
       // $order = $order->get();
        return view('admin.donhang.danhsach',['order'=>$order]);
    }

    public function getThem(){
    	return view('admin.donhang.them');
    }

    public function getSua(){
    	return view('admin.donhang.sua');
    	
    }

    public function getAddToCart(Request $req, $id){
        $product = SanPham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new GioHang($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new GioHang($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }
        else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout(){
        
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new GioHang($oldCart);
            return view('checkout', ['product_cart'=>$cart->items, 'gia_tong'=>$cart->gia_tong, 'sl_tong'=>$cart->sl_tong]);
        } else {
            return view('checkout');
        }
    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');
        $kh = new KhachHang;
        $kh->HoTen = $req->HoTen;
        $kh->NgaySinh = $req->NgaySinh;
        $kh->DiaChi = $req->DiaChi;
        $kh->SDT = $req->SDT;
        $kh->Mail = $req->Mail;
        //$kh->note = $req->notes;
        $kh->save();

        $htvc = new HinhThucVanChuyen();
        

        $order = new PhieuDat;
        $order->idKH = $kh->idKH;
        $order->NgLap = date('d-m-y'); //tùy chọn định dạng hiển thị
        $order->Tong = $cart->gia_tong;
        $order->idHTTT = $req->payment_method;
        $order->idSP = $req->idSP;
        $order->idHTVC = $htvc->idHTVC;
        $order->Loinhan_chuc = $req->notes;
        $order->Giogiao = $req->gio;
        $order->NgayGiao = $req->nggiao;

        $order->save();

        foreach($cart->items as $key=>$value){
            $order_detail = new ChiTietPD;
            $order_detail->id_order = $order->id;
            $order_detail->id_product = $key;
            $order_detail->soluong = $value['soluong'];
            $order_detail->dongia = $value['dongia']; // /$value['qty']
            $order_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao', 'Đặt hàng thành công');
    }
}
