@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
				<a href="{{route('homepage')}}">Home</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
	
	<div class="container">
		<div id="content">
			@if(Session::has('thongbao'))
				<div class="alert alert-success">{{Session::get('thongbao')}}</div>
			@endif
			<form action="{{route('dat-hang')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value={{csrf_token()}}>
				<div class="row">
					<div class="col-sm-6">
						<h4>Đơn đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<h6>Thông tin người gửi</h6>
						<hr>
						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" id="name" name="full_name" placeholder="Họ tên" required>
						</div>

						<div class="form-block">
							<label>Giấu tên người gửi </label>
							<input id="unname" type="radio" class="input-radio" name="unname" value="Có" checked="checked" style="width: 10%"><span style="margin-right: 10%">Có</span>
							<input id="unname" type="radio" class="input-radio" name="unname" value="Không" style="width: 10%"><span>Không</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="address">Địa chỉ*</label>
							<input type="text" id="address" name="address" placeholder="Địa chỉ người gửi" required>
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" name="phone" required>
						</div>
						
						<div class="form-block">
							<label for="notes">Lời nhắn - chúc</label>
							<textarea id="notes" name="notes" placeholder="Nội dung lời nhắn, lời chúc, băng rôn,..."></textarea>
						</div>
						<div class="form-block">
							<label>Giờ giao</label>
							<div class="single-item-options">
								<select class="wc-select" name="gio" style="width: 100px;">
									<option>Giờ giao</option>
									<option value="6h-9h">6h-9h</option>
									<option value="9h-11h">9h-11h</option>
									<option value="14h-15h">14h-15h</option>
									<option value="15h-17h">15h-17h</option>
									<option value="18h-20h">18h-20h</option>
								</select>
							</div>
						</div>
						<div class="form-block">
							<label>Ngày giao</label>
							<input class="form-control" type="date" name="nggiao">
						</div>
						<h6>Thông tin người nhận</h6>
						<hr>
						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" id="name" placeholder="Họ tên" required>
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" placeholder="Địa chỉ người nhận" required>
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									@if(Session::has('cart'))
									@foreach($product_cart as $cart)
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="home-page/image/product/{{$cart['item']['Hinh']}}" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large">{{$cart['item']['TenSP']}}</p>
												<span class="color-gray your-order-info">Số lượng: {{$cart['soluong']}}</span>
												<span class="color-gray your-order-info">Đơn giá: {{number_format($cart['item']['Gia'])}}</span>
											</div>
										</div>
									<!-- end one item -->
									@endforeach
									@endif
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền: </p></div>
									<div class="pull-right"><h5 class="color-black">@if(Session::has('cart')){{number_format(Session('cart')->gia_tong)}} @else 0 @endif đồng</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="your-order-head"><h5>Hình thức vận chuyển</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Vận chuyển nhanh </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											<br>- Phí vận chuyển: 20,000 VNĐ
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Vận chuyển thường </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											<br>- Phí vận chuyển: 18,000 VNĐ
										</div>						
									</li>
								</ul>
							</div>

							<div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection