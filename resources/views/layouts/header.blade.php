<!DOCTYPE html>
<html lang="es">
<head>
<title>Hotel brand</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta name="keywords" content="Ver Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" /> -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('assets/css/chocolat.css')}}" type="text/css" media="screen">
<link href="{{URL::asset('assets/css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="{{URL::asset('assets/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="{{URL::asset('assets/css/jquery-ui.css')}}" />
<script type="text/javascript" src="{{URL::asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{URL::asset('assets/css/bar.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{URL::asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
@yield('custom-styles')
<!--//fonts-->
</head>
<body>
<!-- header -->
	<div class="_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<a href="{{url('/')}}">
					<div class="icon_bar">
						<img class="img-icon" src="{{URL::asset('assets/images/icons/costa_azul.png')}}" alt="logo">
					</div>
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						@yield('nav-items')
					</nav>
				</div>
			</nav>

		</div>
	</div>
  @yield('content')
  <script src="{{URL::asset('assets/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{URL::asset('assets/js/contact_me.js')}}"></script>
  <!-- /contact form -->
  <!-- Calendar -->
  		<script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
  		<script>
  				$(function() {
  				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
  				});
  		</script>
  <!-- //Calendar -->
  <!-- gallery popup -->
  <link rel="stylesheet" href="{{URL::asset('assets/css/swipebox.css')}}">
  				<script src="{{URL::asset('assets/js/jquery.swipebox.min.js')}}"></script>
  					<script type="{{URL::asset('assets/text/javascript')}}">
  						jQuery(function($) {
  							$(".swipebox").swipebox();
  						});
  					</script>
  <!-- //gallery popup -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="{{URL::asset('assets/js/move-top.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('assets/js/easing.js')}}"></script>
  <script type="text/javascript">
  	jQuery(document).ready(function($) {
  		$(".scroll").click(function(event){
  			event.preventDefault();
  			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  		});
  	});
  </script>
  <!-- start-smoth-scrolling -->
  <!-- flexSlider -->
  				<script defer src="{{URL::asset('assets/js/jquery.flexslider.js')}}"></script>
  				<script type="text/javascript">
  				$(window).load(function(){
  				  $('.flexslider').flexslider({
  					animation: "slide",
  					start: function(slider){
  					  $('body').removeClass('loading');
  					}
  				  });
  				});
  			  </script>
  			<!-- //flexSlider -->
  <script src="{{URL::asset('assets/js/responsiveslides.min.js')}}"></script>
  			<script>
  						// You can also use "$(window).load(function() {"
  						$(function () {
  						  // Slideshow 4
  						  $("#slider4").responsiveSlides({
  							auto: true,
  							pager:true,
  							nav:false,
  							speed: 500,
  							namespace: "callbacks",
  							before: function () {
  							  $('.events').append("<li>before event fired.</li>");
  							},
  							after: function () {
  							  $('.events').append("<li>after event fired.</li>");
  							}
  						  });

  						});
  			</script>
  		<!--search-bar-->
  		<script src="{{URL::asset('assets/js/main.js')}}"></script>
  <!--//search-bar-->
  <!--tabs-->
  <script src="{{URL::asset('assets/js/easy-responsive-tabs.js')}}"></script>
  <script>
  $(document).ready(function () {
  $('#horizontalTab').easyResponsiveTabs({
  type: 'default',
  width: 'auto',
  fit: true,
  closed: 'accordion',
  activate: function(event) {
  var $tab = $(this);
  var $info = $('#tabInfo');
  var $name = $('span', $info);
  $name.text($tab.text());
  $info.show();
  }
  });
  $('#verticalTab').easyResponsiveTabs({
  type: 'vertical',
  width: 'auto',
  fit: true
  });
  });
  </script>
  <!--//tabs-->
  <!-- smooth scrolling -->
  	<script type="text/javascript">
  		$(document).ready(function() {
  		/*
  			var defaults = {
  			containerID: 'toTop', // fading element id
  			containerHoverID: 'toTopHover', // fading element hover id
  			scrollSpeed: 1200,
  			easingType: 'linear'
  			};
  		*/
  		$().UItoTop({ easingType: 'easeOutQuart' });
  		});
  	</script>

  	<div class="arr-ls">
  	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  	</div>
  <!-- //smooth scrolling -->
  <script type="text/javascript" src="{{URL::asset('assets/js/bootstrap-3.1.1.min.js')}}"></script>
  </body>
  </html>
