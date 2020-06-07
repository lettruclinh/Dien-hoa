<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ChuDe;
use App\KieuDang;
use App\LoaiHoa;
use App\GioHang;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $chude = ChuDe::all();
            $kieudang = KieuDang::all();
            $loaihoa = LoaiHoa::all();
            $view->with('chude',$chude);
            $view->with('kieudang',$kieudang);
            $view->with('loaihoa',$loaihoa);
        });

        view()->composer(['header', 'checkout'], function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new GioHang($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'gia_tong'=>$cart->gia_tong, 'sl_tong'=>$cart->sl_tong]);
            }
        });
    }
}
