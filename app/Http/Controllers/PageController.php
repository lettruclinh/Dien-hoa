<?php

namespace App\Http\Controllers;
use App\Slide;
use App\SanPham;
use App\ChuDe;
use App\GioHang;
use App\HinhThucVanChuyen;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests;
use validate;
use App\User;
use Session;
use DB;
use App\Comment;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getIndex(){
        $slide = Slide::all();
        $new_product = SanPham::where('New',1)->paginate(4);
      //  dd($new_product);
       $km_product = SanPham::where('Gia_KM','<>',0)->paginate(4);
        return view('homepage',compact('slide','new_product','km_product'));
    }

    public function ProductType($topic){
        $sp_theocd = SanPham::where('idCD',$topic)->get();
        $sp_khac = SanPham::where('idCD','<>',$topic)->paginate(3);
        $chude = ChuDe::all();
        $chude_sp = ChuDe::where('id',$topic)->first();
        return view('product-type',compact('sp_theocd','sp_khac','chude','chude_sp'));
    }

    public function Product($id){
        $sanpham = SanPham::where('id',$id)->first();
        $sp_tuongtu = SanPham::where('idcd',$sanpham->idCD)->where('id','<>',$id)->paginate(3);
        $sp_km = SanPham::where('Gia_KM','<>',0)->paginate(4);
        $new_pro = SanPham::where('New',1)->paginate(4);
        return view('product',compact('sanpham','sp_tuongtu','sp_km','new_pro'));
    }

    public function Signup(){
        return view('signup');
    }
    
    public function postSignup(Request $Request){
        $this->validate($Request , ['name'=>'required|min:3',
                                    'email'=>'required|email|unique:users,email',
                                    'password'=>'required|min:3|max:32',
                                    'repassword'=>'required|same:password',
                                    ],
            ['name.required'=>'Bạn chưa nhập tên',
            'name.min'=>'Tên phải có ít nhất 3 kí tự',
             'email.required'=>'Bạn chưa nhập email',
             'email.email'=>'Email chưa đúng dạng',
             'email.unique'=>'Email đã tồn tại',
             'password.required'=>'Bạn chưa nhâp password',
             'password.min'=>'password phải có ít nhất 3 kí tự',
             'password.max'=>'password phải có nhiều nhất 32 kí tự',
             'repassword.required'=>'Bạn chưa nhập lại password',
             'repassword.same'=>'Password không trùng với password vừa nhập',
            ]);
        $user = new User;
        $user->name = $Request->name;
        $user->email = $Request->email;
        $user->password = bcrypt($Request->password);
        $user->quyen = 3;
        $user->save();
        return redirect('signup')->with('thongbao', 'Chúc mừng bạn đã đăng kí thành công!');
        
    }

    public function Login(){
        return view('login');
    }

    public function Contacts(){
        return view('contacts');
    }

    public function Checkout(){
        return view('checkout');
    }

    public function About(){
        return view('about');
    }

    public function PageNotFound(){
        return view('404');
    }

    public function getSearch(Request $req){
        $product = SanPham::where('TenSP','like','%'.$req->key.'%')
                            ->orWhere('Gia',$req->key)
                            ->get();
        return view('search',compact('product'));
    }


    function postdangnhap(Request $request){
        /*    echo $Request->email."<br>";
              echo $Request->password;
        */
        // $this->validate($Request,[
        //     'email'=>'required',
        //     'password'=>'required|min:3|max:32'
        // ],[
        //     'email.required'=>'Bạn chưa nhập email',
        //     'password.required'=>'Bạn chưa nhập password',
        //     'password.min'=>'Mật khẩu có ít nhất 3 kí tự',
        //     'email.max'=>'Mật khẩu có không quá 32 kí tự'
        // ]);
 

      /*         $admin_email=$request->email;
        $admin_password=$request->password;
      
            $result=DB::table('users')
        ->where('email',$admin_email)
        ->where('password',$admin_password)
        ->first(); */

        // if(Auth::attempt(['email'=>$Request->email,'password'=>$Request->password]))
        // {
        //     return Redirect::to('index');
        // }else{
        //     return redirect('login')->with('thongbao', 'Đăng nhập không thành công!');
        // }
        $login=[
                'email'=>$request->input('email'),
                'password'=>$request->input('password')
         ];
         if(Auth::guard('users')->attempt($login)){
            $request->session()->put('name',$request->input('email'));
            $data=User::where('users.email',$request->input('email'))->first();
            $request->session()->put('quyen',$data->quyen);
            if($data->quyen==3){
                return redirect('index');
            }
            elseif($data->quyen==1){
                return redirect('admin/dashboard');
            }
            else{
                return redirect('admin/dashboard');
            }
         }
         else{
            return back()->with('thongbao', 'Nhập sai tên đăng nhập hoặc mật khẩu');
        }
    }

    function postLogout(){
        Auth::logout();
        return redirect()->route('homepage');
    /*    Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('login'); */
    }

    function getnguoidung(){
        $user = Auth::user();
        return view('nguoidung',['nguoidung'=>$user]);
    } 
    function postnguoidung(Request $Request){
      $this->validate($Request , ['name'=>'required|min:3'],
            ['name.required'=>'Bạn chưa nhập tên',
            'name.min'=>'Tên phải có ít nhất 3 kí tự',
            ]);
        $user = Auth::user();
        $user->name = $Request->name;
       
        
        if($Request->changePassword == 'on')
        {
            $this->validate($Request , [
                                    'password'=>'required|min:3|max:32',
                                    'passwordAgain'=>'required|same:password',
                                    ],
            [
             'password.required'=>'Bạn chưa nhâp password',
             'password.min'=>'password phải có ít nhất 3 kí tự',
             'password.max'=>'password phải có nhiều nhất 32 kí tự',
             'passwordAgain.required'=>'Bạn chưa nhập lại password',
             'passwordAgain.same'=>'Password không trùng với password vừa nhập',
            ]);
            $user->password = bcrypt($Request->password);
        }

        $user->save();
        return redirect('nguoidung')->with('thongbao', 'Sửa thành công!');
        
    } 

}
