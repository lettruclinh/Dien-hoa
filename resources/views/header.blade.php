<div id="header">
		<div class="header-top" style="background-color: #e2dcdc;">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href="{{route('contacts')}}"><i class="fa fa-home"></i> Ninh Kiều, Cần Thơ</a></li>
						<li><a><i class="fa fa-phone"></i> (+84)326560044</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
					@if(!isset(Auth::user()->name))
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="{{route('signup')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
						<li class="hidden-xs" id="translate_select"></li>
					@else	
					<li><a href="nguoidung"><i class="fa fa-user"></i>{{Auth::user()->name}}</a></li>
						<li>
                        	<a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                        </li>
						<li class="hidden-xs" id="translate_select"></li>
					@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('homepage')}}" id="logo"><img src="{{URL::to('home-page/image/icon/logo5.JPG')}}" width="350px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
					
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->sl_tong}} @else Trống @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
							@if(Session::has('cart'))
							 @foreach($product_cart as $sp)
								<div class="cart-item">
									<a class="cart-item-delete" href="{{route('xoagiohang', $sp['item']['id'])}}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="home-page/image/product/{{$sp['item']['Hinh']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$sp['item']['TenSP']}}</span>
											<span class="cart-item-amount">{{$sp['soluong']}} * <span>@if($sp['item']['Gia_KM']==0){{number_format($sp['item']['dongia'])}} @else {{number_format($sp['item']['Gia_KM'])}}@endif</span></span>

										</div>
									</div>
								</div>
							 @endforeach
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: 
										<span class="cart-total-value">@if(Session::has('cart')){{number_format(Session('cart')->gia_tong)}} @else 0 @endif đồng</span>
									</div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('checkout')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
								@endif
							</div>
						</div> <!-- .cart -->
					
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #409c76;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('homepage')}}">Trang chủ</a></li>
						<li><a href="#">Chủ đề</a>
							<ul class="sub-menu">
								@foreach($chude as $cd)
								<li><a href="{{route('product-type',$cd->id)}}">{{$cd->TenChuDe}}</a></li>
								@endforeach
							</ul>
						</li>

					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
</div> <!-- #header -->