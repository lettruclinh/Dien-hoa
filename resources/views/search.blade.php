@extends('master')
@section('content')
<div class="fullwidthbanner-container">
	</div>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Tìm Kiếm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($product as $new)
								<div class="col-sm-3">
									<div class="single-item">
									@if($new->Gia_KM!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
										<div class="single-item-header">
											<a href="product.html"><img src="home-page/image/product/{{$new->Hinh}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->TenSP}}</p>
											<p class="single-item-price">
												@if($new->Gia_KM==0)
												<span class="flash-sale">{{$new->Gia}} VNĐ</span>
												@else
												<span class="flash-del">{{$new->Gia}} VNĐ</span>
												<span class="flash-sale">{{$new->Gia_KM}} VNĐ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach	
							</div>
						</div> <!-- .beta-products-list -->	
					</div>
				</div> <!-- end section with sidebar and main content -->
				<!--Icon-camket-->		
				<hr style="height:2px">	
				<div class="f-img-shipping">
					<img class="slide-image" src="image/icon/camket.JPG" alt="">
				</div>
			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection   