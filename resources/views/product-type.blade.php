@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm theo chủ đề</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('homepage')}}">Home</a> / <span>Chủ đề</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
						 @foreach($chude as $c)
							<li><a href="{{route('product-type',$c->id)}}">{{$c->TenChuDe}}</a></li>
						 @endforeach	
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản Phẩm Theo Chủ Đề</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($sp_theocd)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							  @foreach($sp_theocd as $spcd)
								<div class="col-sm-4">
									<div class="single-item">
									@if($spcd->Gia_KM!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<div class="single-item-header">
										<a href="{{route('product',$spcd->id)}}"><img src="{{ URL::to('home-page/image/product/')}}/{{$spcd->Hinh}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spcd->TenSP}}</p>
											<p class="single-item-price">
												@if($spcd->Gia_KM==0)
												<span class="flash-sale">{{$spcd->Gia}} VNĐ</span>
												@else
												<span class="flash-del">{{$spcd->Gia}} VNĐ</span>
												<span class="flash-sale">{{$spcd->Gia_KM}} VNĐ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$spcd->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product',$spcd->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							  @endforeach	
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{$sp_khac->total()}}</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sp_khac as $sp)
								<div class="col-sm-4">
									<div class="single-item">
									@if($sp->Gia_KM!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<div class="single-item-header">
										<a href="{{route('product',$sp->id)}}"><img src="{{ URL::to('home-page/image/product/')}}/{{$sp->Hinh}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->TenSP}}</p>
											<p class="single-item-price">
												@if($sp->Gia_KM==0)
												<span class="flash-sale">{{$sp->Gia}} VNĐ</span>
												@else
												<span class="flash-del">{{$sp->Gia}} VNĐ</span>
												<span class="flash-sale">{{$sp->Gia_KM}} VNĐ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('product',$sp->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							  @endforeach	
							</div>
							<div class="row">{{$sp_khac->links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection