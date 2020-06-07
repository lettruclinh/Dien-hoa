@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<!-- <h6 class="inner-title">Đăng kí</h6> -->
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng ký</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
	
	<div class="container">
		<div id="content">
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
			<form action="signup" method="POST" class="beta-form-checkout">
			@csrf
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng ký</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="name">Tên*</label>
							<input type="text" id="name" name="name" required>
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required>
						</div>

						<div class="form-block">
							<label for="password">Password*</label>
							<input type="password" id="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="repassword">Nhập lại password*</label>
							<input type="password" id="repassword" name="repassword" required>
						</div>
							<!-- <input  type="hidden" id="id_vt" name="id_vt">
 -->				
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</div>
						<?php
                    $message=Session::get('message');
                    if ($message){
                        echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
                        Session::put('message',null);
                    }
        			?>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection