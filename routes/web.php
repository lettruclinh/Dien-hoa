<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/dangnhap', 'UserController@getdangnhapAdmin');
Route::post('admin/dangnhap', 'UserController@postdangnhapAdmin');
Route::get('admin/logout', 'UserController@getlogoutAdmin');


Route::get('/', function () {
    return view('admin.layout.index');
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'lo'],function(){
		//admin/lo/danhsach
		Route::get('danhsach','LoController@getDanhSach');

		Route::get('them','LoController@getThem');

		Route::get('sua','LoController@getSua');
	});

	Route::group(['prefix'=>'sanpham'],function(){
		
		Route::get('danhsach','SanPhamController@getDanhSach');

		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@postThem');

		Route::get('sua/{id}','SanPhamController@getSua');
		Route::post('sua/{id}','SanPhamController@postSua');

		Route::get('xoa/{id}','SanPhamController@getXoa');
	});

	Route::group(['prefix'=>'chude'],function(){
		
		Route::get('danhsach','ChuDeController@getDanhSach');

		Route::get('them','ChuDeController@getThem');
		Route::post('them','ChuDeController@postThem');

		Route::get('sua/{id}','ChuDeController@getSua');
		Route::post('sua/{id}','ChuDeController@postSua');

		Route::get('xoa/{id}','ChuDeController@getXoa');
	});

	Route::group(['prefix'=>'khuyenmai'],function(){
		
		Route::get('danhsach','KhuyenMaiController@getDanhSach');

		Route::get('them','KhuyenMaiController@getThem');
		Route::post('them','KhuyenMaiController@postThem');

		Route::get('sua/{id}','KhuyenMaiController@getSua');
		Route::post('sua/{id}','KhuyenMaiController@postSua');

		Route::get('xoa/{id}','KhuyenMaiController@getXoa');
	});

	Route::group(['prefix'=>'nguyenlieu'],function(){
		
		Route::get('danhsach','NguyenLieuController@getDanhSach');

		Route::get('them','NguyenLieuController@getThem');

		Route::get('sua','NguyenLieuController@getSua');
	});

	Route::group(['prefix'=>'loaihoa'],function(){
		
		Route::get('danhsach','LoaiHoaController@getDanhSach');

		Route::get('them','LoaiHoaController@getThem');
		Route::post('them','LoaiHoaController@postThem');

		Route::get('sua/{id}','LoaiHoaController@getSua');
		Route::post('sua/{id}','LoaiHoaController@postSua');

		Route::get('xoa/{id}','LoaiHoaController@getXoa');
	});

	Route::group(['prefix'=>'donhang'],function(){
		
		Route::get('danhsach','DonHangController@getDanhSach');

		Route::get('them','DonHangController@getThem');

		Route::get('sua','DonHangController@getSua');
	});

	Route::group(['prefix'=>'khachhang'],function(){
		
		Route::get('danhsach','KhachHangController@getDanhSach');

	//	Route::get('them','KhachHangController@getThem');

		Route::get('xoa/{id}','KhachHangController@getXoa');
	});

	Route::group(['prefix'=>'thanhly'],function(){
		
		Route::get('danhsach','ThanhLyController@getDanhSach');

		Route::get('them','ThanhLyController@getThem');

		Route::get('sua','ThanhLyController@getSua');
	});


	Route::group(['prefix'=>'vanchuyen'],function(){
		
		Route::get('danhsach','VanChuyenController@getDanhSach');

		Route::get('them','VanChuyenController@getThem');

		Route::get('sua','VanChuyenController@getSua');
	});

	
	Route::group(['prefix'=>'slide'],function(){
		
		Route::get('danhsach','SlideController@getDanhSach');

		Route::get('them','SlideController@getThem');
		Route::post('them','SlideController@postThem');

		Route::get('sua/{id}','SlideController@getSua');
		Route::post('sua/{id}','SlideController@postSua');

		Route::get('xoa/{id}','SlideController@getXoa');
	});

	Route::group(['prefix'=>'user'], function(){

		Route::get('danhsach', 'UserController@getDanhSach');

		Route::get('them', 'UserController@getThem');
		Route::post('them', 'UserController@postThem');
		
		Route::get('sua/{id}', 'UserController@getSua');
		Route::post('sua/{id}', 'UserController@postSua');
		
		Route::get('xoa/{id}', 'UserController@getXoa');
	});

	Route::group(['prefix'=>'comment'], function(){
		Route::get('xoa/{id}/{idSanPham}', 'CommentController@getXoa');
	});
});

Route::get('index', [
    'as'=>'homepage',
    'uses'=>'PageController@getIndex'
]);

Route::get('product-type/{topic}', [
	'as'=>'product-type',
	'uses'=>'PageController@ProductType'
]);

Route::get('product/{id}', [
	'as'=>'product',
	'uses'=>'PageController@Product'
]);

Route::get('signup', [
	'as'=>'signup',
	'uses'=>'PageController@Signup'
]);

Route::post('signup', 'PageController@postSignup');

Route::get('login', [
	'as'=>'login',
	'uses'=>'PageController@Login'
]);  
/* Route::get('dangnhap', 'PageController@getdangnhap');
Route::post('dangnhap', 'PageController@postdangnhap'); */
Route::post('login', 'PageController@postLogin');
Route::get('logout', 'PageController@getdangxuat');

Route::get('contacts', [
	'as'=>'contacts',
	'uses'=>'PageController@Contacts'
]);

Route::get('checkout', [
	'as'=>'checkout',
	'uses'=>'PageController@Checkout'
]);

Route::get('about', [
	'as'=>'about',
	'uses'=>'PageController@About'
]);

Route::get('404', [
	'as'=>'404',
	'uses'=>'PageController@PageNotFound'
]);

Route::get('search', [
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);

Route::get('add-to-cart/{id}', [
	'as'=>'themgiohang',
	'uses'=>'DonHangController@getAddToCart'
]);

Route::get('del-cart/{id}', [
	'as'=>'xoagiohang',
	'uses'=>'DonHangController@getDelItemCart'
]);

Route::get('check-out', [
	'as'=>'dat-hang',
	'uses'=>'DonHangController@getCheckout'
]);

Route::post('check-out', [
	'as'=>'dat-hang',
	'uses'=>'DonHangController@postCheckout'
]);

// Route::get('logout', 'PageController@logout');
Route::get('admin/dashboard', 'UserController@dashboard');  

Route::post('login', 'PageController@postdangnhap');
Route::get('logout', [
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);

Route::get('nguoidung', 'PageController@getnguoidung');
Route::post('nguoidung', 'PageController@postnguoidung');

Route::post('check-out', [
	'as'=>'dat-hang',
	'uses'=>'DonHangController@postCheckout'
]);


Route::post('comment/{id}', [
	'as'=>'comment',
	'uses'=>'CommentController@postcomment'
]);
