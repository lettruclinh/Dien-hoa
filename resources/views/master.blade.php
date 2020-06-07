<!doctype html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title >Dienhoa.vn </title>


	<!-- Bootstrap Core CSS -->
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

	@yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/vendors/colorbox/example3/colorbox.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/rs-plugin/css/settings.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/rs-plugin/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{URL::to('home-page/assets/dest/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{URL::to('home-page/assets/dest/css/huong-style.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/css/backtotop.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/css/my.css')}}">
	<link rel="stylesheet" href="{{URL::to('home-page/assets/dest/css/backtotop.css')}}">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 	
	
</head>
<body>

	@include('header')
	<div class="rev-slider">
        @yield('content')
    </div>
	@include('footer')
	<div class="copyright">
		<div class="container">
			<p style="text-align: center;">Copyright &copy; <?php echo date("Y"); ?> Dienhoa.vn. All rights reserved.</p>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="{{URL::to('home-page/assets/dest/js/jquery.js')}}"></script>
	<script src="{{URL::to('resources/views/home-page/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="{{URL::to('home-page/assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/vendors/animo/Animo.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/vendors/dug/dug.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/js/scripts.min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/js/waypoints.min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/js/wow.min.js')}}"></script>
	<script src="{{URL::to('home-page/assets/dest/js/backtotop.js')}}"></script>

	<script src="{{URL::to('admin_asset/ckeditor/ckeditor.js')}}" ></script>
	@yield('script')
	<!--customjs-->
	<script src="{{URL::to('home-page/assets/dest/js/custom2.js')}}"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	<!--Back to top-->
    <div class="on_top">
        <a id="top" class="to_top" href="#"><img class="to_top" src="{{URL::to('home-page/image/icon/up-arrow-angle.png')}}" alt=""></a>
	</div> 
	<!--Google tranlate button-->
	<script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
	</script>
	
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'vi'}, 'translate_select');
		}
	</script>
	</style>
</script>
</body>
</html>
