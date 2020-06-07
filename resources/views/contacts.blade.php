@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Bản đồ</h6>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31430.632213330635!2d105.7513944227744!3d10.030963641105505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqEgLSBDYW4gdGhvIFVuaXZlcnNpdHk!5e0!3m2!1svi!2s!4v1587962146677!5m2!1svi!2s" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Thông tin góp ý</h2>
					<div class="space20">&nbsp;</div>
					<p>Mọi thắc mắc và đóng góp của các bạn xin liên hệ với chúng tôi thông qua mẫu bên dưới. Chúng tôi rất vui vì sự tin tưởng sử dụng dịch vụ của các bạn. Xin cảm ơn!</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Nhập tên (Bắt buộc">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Nhập Email (Bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Nội dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin liên hệ</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						Khu II, đường 3/2<br>
						P. Xuân Khánh TP, Ninh Kiều <br>
						Cần Thơ
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Đại diện kinh doanh</h6>
					<p>
						Ms.Đặng Nguyễn Diễm Thúy <br>
						<a href="#">AdminN6@gmail.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Thành viên kinh doanh</h6>
					<p>
						Lê Thị Trúc Linh <br>
						Nguyễn Vũ Phương Uyên <br>
						Huỳnh Thị Hồng Loan	<br>
						Dương Thị Ngọc Mai <br>
						<a href="#">admin.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
    </div> <!-- .container -->
@endsection