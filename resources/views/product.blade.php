@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">{{$sanpham->TenSP}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('homepage')}}">Home</a> / <span>Chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>

<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="{{ URL::to('home-page/image/product/')}}/{{$sanpham->Hinh}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$sanpham->TenSP}} - Mã sản phẩm: {{$sanpham->id}}</p>
								<p class="single-item-price">
								@if($sanpham->Gia_KM==0)
									<span class="flash-sale">{{$sanpham->Gia}} VNĐ</span>
								@else
									<span class="flash-del">{{$sanpham->Gia}} VNĐ</span>
									<span class="flash-sale">{{$sanpham->Gia_KM}} VNĐ</span>
								@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>Ý tưởng sản phẩm:</p> {{$sanpham->Y_Tuong}}  
							</div>
							<div class="space20">&nbsp;</div>

							<p>Tùy chọn:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Kích thước</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<section>
									<label for="amount"> Số lượng: </label>
									<input class="wc-select" id="amount" type="number" name="amount" step="1">
								</section>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
								{{$sanpham->Mota}} 
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>

				 <!-- Comments Form -->
				 @if(isset(Auth::user()->name))
					<div class="well">
					@if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                            @endif
                    <div><i style="font-size: 120%;">Viết bình luận ...</i><span class="glyphicon glyphicon-pencil"></span></div>
                    <form action="{{route('comment',$sanpham->id)}}" method="POST" role="form">
					@csrf
                        <div class="form-group">
                            <textarea name="NoiDung" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>
                @endif
                <!-- Posted Comments -->

                <!-- Comment -->
				@foreach($sanpham->comment as $cm)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/32X32" alt="">
                    </a>
                    <div class="media-body">
                        <div class="user-comm"><b style="color: blue; font-size: 120%;">{{$cm->user->name}}</b>
                            <small>{{$cm->created_at}}</small>
                        </div>
                        {{$cm->NoiDung}}
                    </div>
                </div>
				@endforeach
				<hr>

                <!-- Comment -->
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm liên quan</h4>


						<div class="row">
						@foreach($sp_tuongtu as $sptt)
							<div class="col-sm-4">
								<div class="single-item">
								@if($sptt->Gia_KM!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="{{route('product',$sptt->id)}}"><img src="{{ URL::to('home-page/image/product/')}}/{{$sptt->Hinh}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$sptt->TenSP}}</p>
										<p class="single-item-price">
												@if($sptt->Gia_KM==0)
												<span class="flash-sale">{{$sptt->Gia}} VNĐ</span>
												@else
												<span class="flash-del">{{$sptt->Gia}} VNĐ</span>
												<span class="flash-sale">{{$sptt->Gia_KM}} VNĐ</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="{{route('product',$sptt->id)}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('product',$sptt->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

						@endforeach
						</div>
						<div class="row">{{$sp_tuongtu->links()}}</div>
					</div> <!-- .beta-products-list -->
				</div>
				
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">lựa chọn nhiều nhất</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
							@foreach($sp_km as $km)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('product',$km->id)}}"><img src="{{ URL::to('home-page/image/product/')}}/{{$km->Hinh}}" alt=""></a>
									<div class="media-body">
									{{$km->TenSP}}
										<span class="beta-sales-price">{{$km->Gia_KM}} VNĐ</span>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						<div class="widget-body">
							@foreach($new_pro as $np)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('product',$np->id)}}"><img src="{{ URL::to('home-page/image/product/')}}/{{$np->Hinh}}" alt=""></a>
									<div class="media-body">
									{{$np->TenSP}}
										<span class="beta-sales-price">{{$np->Gia}} VNĐ</span>
									</div>
								</div>
							@endforeach
							</div>
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection