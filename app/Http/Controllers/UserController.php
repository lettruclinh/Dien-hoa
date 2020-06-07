<?php

namespace App\Http\Controllers;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ChuDe;
use App\SanPham;
use App\Comment;
use App\Slide;
use App\User;
use Session;
use DB;
use App\Http\Requests;
use validate;
use App\VaiTro;

class UserController extends Controller
{
    
    
    public function getDanhSach(){
    	$user = User::all();
    	return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getSua($id){
        
        $user = User::find($id);
        $vaitro = VaiTro::all();
        return view('admin.user.sua', ['user'=>$user,'vaitro'=>$vaitro]);
    }
     public function postSua(Request $Request, $id){
       $this->validate($Request , ['name'=>'required|min:3'],
    		['name.required'=>'Bạn chưa nhập tên',
    		'name.min'=>'Tên phải có ít nhất 3 kí tự',
    		]);
    	$user = User::find($id);
    	$user->name = $Request->name;
       
        $user->quyen = $Request->quyen;
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
        return redirect('admin/user/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }
    public function getThem(){
        $vaitro = VaiTro::all();
    	return view('admin.user.them',['vaitro'=>$vaitro]);
    }
    public function postThem(Request $Request){
    	//echo $Request->Ten;
    	$this->validate($Request , ['name'=>'required|min:3',
                                    'email'=>'required|email|unique:users,email',
                                    'password'=>'required|min:3|max:32',
                                    'passwordAgain'=>'required|same:password',
                                    ],
    		['name.required'=>'Bạn chưa nhập tên',
    		'name.min'=>'Tên phải có ít nhất 3 kí tự',
             'email.required'=>'Bạn chưa nhập email',
             'email.email'=>'Email chưa đúng dạng',
             'email.unique'=>'Email đã tồn tại',
             'password.required'=>'Bạn chưa nhâp password',
             'password.min'=>'password phải có ít nhất 3 kí tự',
             'password.max'=>'password phải có nhiều nhất 32 kí tự',
             'passwordAgain.required'=>'Bạn chưa nhập lại password',
             'passwordAgain.same'=>'Password không trùng với password vừa nhập',
    		]);
    	$user = new User;
    	$user->name = $Request->name;
        $user->email = $Request->email;
        $user->password = bcrypt($Request->password);
        $user->quyen = $Request->quyen;
        $user->save();
        return redirect('admin/user/them')->with('thongbao', 'Thêm thành công!');
        //echo changeTitle($Request->Ten);
    }
    public function getXoa($id)
    {
      $user = User::find($id);
      $comment = Comment::where('idUser',$id); //Tìm các comment của user
      $comment->delete(); //Xóa các comment của user
      $user->delete(); //Xóa user
      return redirect('admin/user/danhsach')->with('thongbao','Xóa tài khoản thành công');
    }
    public function getdangnhapAdmin(){
    	return view('admin.dangnhap');
    }
    public function dashboard(){
        return view('admin.layout.index');
    }  
    public function postdangnhapAdmin(Request $request){
	$this->validate($request,[
    								'email'=>'required',
    								'password'=>'required|min:3|max:32'
    							],[
    								'email.required'=>'Bạn chưa nhập email',
    								'password.required'=>'Bạn chưa nhập password',
    								'password.min'=>'Mật khẩu có ít nhất 3 kí tự',
    								'email.max'=>'Mật khẩu có không quá 32 kí tự'
    							]);
    	// if(Auth::attempt(['email'=>$Request->email,'password'=>$Request->password]))
    	// {
    	// 	return redirect('dashboard');
    	// }
    	// else{
    	// 	return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập không thành công!');
        // }  
        $login=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
     ];
     if(Auth::guard('users')->attempt($login)){
        $request->session()->put('name',$request->input('email'));
        $data=User::where('users.email',$request->input('email'))->first();
        $request->session()->put('quyen',$data->quyen);
        if($data->quyen==2){
            return redirect('admin/dashboard');
        }
        elseif($data->quyen==1){
            return redirect('admin/dashboard');
        }

     }
     else{
        return back()->with('thongbao', 'Nhập sai tên đăng nhập hoặc mật khẩu');
    }
        
    /*    $admin_email=$request->email;
        $admin_password=$request->password;

        $result=DB::table('users')
        ->where('email',$admin_email)
        ->where('password',$admin_password)
        ->first();

        if($result){
            return redirect('dashboard');
            
        }else{
            return redirect('admin/dangnhap')->with('thongbao', 'Email hoặc Mật khẩu sai. Vui lòng nhập lại!');
        }
        */
	}
	public function getlogoutAdmin(){
		Auth::logout();
		return redirect('admin/dangnhap');
	}
}
