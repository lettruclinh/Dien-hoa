@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Thông tin tài khoản {{Auth::user()->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('homepage')}}">Home</a> / <span>Tài khoản</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err }}<br>
                    @endforeach
                </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                         {{session('thongbao')}}
                    </div>
                 @endif
				<form action="nguoidung" method="POST" >
				    @csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
                    <form action="nguoidung" method="POST" >
				    		@csrf
                        <div class="row">    
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="{{$nguoidung->name}}">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1 " value="{{$nguoidung->email}}"
							  	>
							</div>
                            <br>
                            <div>	
                            <input type="checkbox" name="changePassword" id="changePassword" checked="true">
                                <label>Đổi mật khẩu</label>
                                <input type="Password" class="form-control password" name="password" placeholder="Nhập mật khẩu" />
                            </div>
                            <div>
                                <label>Nhập lại mật khẩu</label>
                                <input type="Password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu" />
                            </div>
							<br>
							<button type="submit" class="btn btn-default">Sửa
							</button>
                            <div>&nbsp;</div>   
                            </div>
				    	</form>
				</div>
			</form>
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection
    @section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#changePassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else{
                    $(".password").attr('disabled', '');
                }
            });
        });
    </script>
@endsection