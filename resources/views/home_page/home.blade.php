<!DOCTYPE html><!--[if !IE]><!-->
<html lang="en-US">
<!--<![endif]--><!--[if IE 6 ]><html lang="en-US" class="ie ie6"><![endif]--><!--[if IE 7 ]><html lang="en-US" class="ie ie7"><![endif]--><!--[if IE 8 ]><html lang="en-US" class="ie ie8"><![endif]--><!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<base ><!--[if lte IE 6]></base><![endif]-->
	<title>Home</title>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<meta content="text/html; charset=utf-8" http-equiv="Content-type">
	<link href="{{asset('home_assets/img/favicon.png')}}" rel="shortcut icon">
	<link rel="stylesheet" href="{{asset('home_assets/css/style.css')}}">
	<script src="{{asset('home_assets/js/head.min.js')}}"></script>
</head>
<body class="Home" dir="ltr"> 
	<noscript>
		<iframe height="0" src="https://www.googletagmanager.com/ns.html?id=GTM-PS4NQWB" style="display:none;visibility:hidden" width="0"></iframe>
	</noscript>
	<div class="nm-loading" id="pageLoad">
		<div class="nm-loading-anim">
			<div class="nm-loading-anim-item">
			</div>
		</div>
	</div>
	
	<header class="header" theme="white-black">
		<div class="inner">
			<div class="d-flex justify-content-between">
				<a class="brand" href="{{URL::to('/')}}"> 
					<img class="logo-n-black" src="{{asset('home_assets/img/logo-s.png')}}" title="logo">
					<img class="logo-white" src="{{asset('home_assets/img/logo.png')}}" title="logo">
					<img class="logo-black" src="{{asset('home_assets/img/logo-s.png')}}" title="logo">
				</a> 
				<ul>
					<li> 
						<a href="{{URL::to('/')}}">Home</a> 
					</li> 
					<li> 
						<a href="#">Projects</a> 
					</li> 
					<li> 
						<a href="#">About</a> 
					</li> 
					<li> 
						<a href="#">Contact</a> 
					</li> 
				</ul>
			</div>
		</div>

		<div class="toggle-menu">
			<div class="inner">
				<div></div> 
				<div></div> 
				<div></div>
			</div>
		</div>
	</header>

	<div class="menu-full">
		<div class="align-items-center d-flex inner justify-content-center">
			<ul>
				<li> 
					<a href="{{URL::to('/')}}">Home</a> 
				</li> 
				<li> 
					<a href="#">Projects</a> 
				</li> 
				<li> 
					<a href="#">About Us</a> 
				</li> 
				<li> 
					<a href="#">Contact</a> 
				</li> 
			</ul>
			<div class="menu-close toggle-menu"></div>
		</div>
		<div class="menu-bg"></div>
	</div>
	<div class="scroll-guide">
		<div></div> 
		<span>SCROLL</span>
	</div>
	<div class="stage-indicator">
		<div class="stage" stage-background-size="half-to-full" style="height: 40vh;">
			<div class="stage-item" style="height: 100%;" target=".hero .front h1" target-action="to-right"></div> 
			<div class="stage-item" style="height: 100%; top: -100%" target=".hero .back> .bb:first .inner" target-action="fade-in"></div>
			<div class="stage-item" style="height: 100%; top: -200%" target=".scroll-guide" target-action="fade-out"></div>
		 </div>
		 <div class="stage" stage-background-color-begin="#008000" stage-background-color-end="#FFFFFF" style="height: 50vh;">
		 	<div class="stage-item" style="height: 50%;" target=".hero .front h1" target-action="fade-up"></div> 
		 	<div class="stage-item" style="height: 50%; top: -50%" target=".hero .back> .bb:first .inner" target-action="fade-up"></div>
		 </div>
		 <div class="stage" style="height: 30vh;">
		 	<div class="stage-item" style="position: absolute; top: 0;height: 100%;" target=".stage-background .color-background" target-action="shadow-in"></div> 
		 	<div class="stage-item" style="height: 100%;" target="#words .inner:eq(0) .words-item" target-action="fade-in"></div>
		 </div>
		 <div class="stage-delay" style="height: 20vh;"></div>
		 <div class="stage" style="height: 60vh;">
		 <div class="stage-item" style="height: 100%" target="#words> .inner" target-action="scroll-up"></div>
		 </div>
	 </div>

	 <div class="stage-background">
	 	<div class="color-background"></div>
	 </div>
	 <div class="main" role="main">
		 <div class="hero" header-theme="white-black">
			 <div class="front">
			 	<h1 class="size-1">Unwrapping ideas, relentlessly</h1>
			 </div>
			 <div class="back">
				 <div class="bb">
					 <div class="inner">
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua.</p>
					 </div>
				 </div>
				 <div class="bb">
				 	<div class="inner"></div>
				 </div>
			 </div>
		 </div>
		 <section class="section" id="words">
			 <div class="align-items-center d-flex inner justify-content-center">
				 <div class="wrap">
					 <h4>services</h4> 
					 <ul>
					 <li> 
						 <h5>Website</h5>
						 <div class="align-items-center d-flex">
							 <ul>
							 	<li>ipsum dolor sit amet</li> 
							 </ul>
						 </div>
					 </li> 
					 <li> 
						 <h5>Graphics Design</h5>
						 <div class="align-items-center d-flex">
							 <ul>
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
							 </ul>
						 </div>
					 </li> 
					 <li> 
						 <h5>Mobile Application</h5>
						 <div class="align-items-center d-flex">
							 <ul>
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
							 </ul>
						 </div>
					 </li> 
					 <li> 
						 <h5>Software Development</h5>
						 <div class="align-items-center d-flex">
							 <ul>
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
							 </ul>
						 </div>
					 </li> 
					 <li> 
						 <h5>Lorem Ipsum</h5>
						 <div class="align-items-center d-flex">
							 <ul>
								 <li>ipsum dolor sit amet</li> 
								 <li>ipsum dolor sit amet</li> 
							 </ul>
						 </div>
					 </li>  
					 </ul>
	 			</div>
			 </div>
		 </section>

		 <section class="align-items-center d-flex justify-content-center section" header-theme="white-white" id="projects">
			 <!-- <div class="inner">
				 <h4>Completed PROJECTS</h4> 
				 <a href="#">
				 	<h5>E-commerce website</h5>
				 </a> 
				 <a href="#">
				 	<h5>Lorem ipsum</h5>
				 </a> 
				 <a href="#">
				 	<h5>Preject name</h5>
				 </a> 
				 <h4>
				 	<a href="#">See More</a>
				 </h4>
			 </div> -->
		 </section>

		 <section class="section partner" header-theme="" id="partners">
			 <div class="container">
				 <h4 class="section_title">Our Partners</h4>
				 <div class="row">
					 <div class="col-md-2 partner0">
					 	<img src="{{asset('home_assets/img/partners/partner2.png')}}">
					 	<h5>ipsum dolor</h5>
					 </div>
					 <div class="col-md-2 partner0">
					 	<img src="{{asset('home_assets/img/partners/partner4.png')}}">
					 	<h5>ipsum dolor</h5>
					 </div>
					 <div class="col-md-2 partner0">
					 	<img src="{{asset('home_assets/img/partners/partner6.png')}}">
					 	<h5>ipsum dolor</h5>
					 </div>
					 <div class="col-md-2 partner0">
					 	<img src="{{asset('home_assets/img/partners/partner2.png')}}">
					 	<h5>ipsum dolor</h5>
					 </div>
					 <div class="col-md-2 partner0">
					 	<img src="{{asset('home_assets/img/partners/partner4.png')}}">
					 	<h5>ipsum dolor</h5>
					 </div>
					 <div class="col-md-2 partner0">
					 	<img src="{{asset('home_assets/img/partners/partner6.png')}}">
					 	<h5>ipsum dolor</h5>
					 </div>
<!-- 
					 <div class="col-md-2 partner0">
					 	<img src="home_assets/img/partners/partner5.png">
					 	<h5>ipsum dolor</h5>
					 </div> -->

				 </div>
			 </div>
		 </section>

		 <section class="section">
		 	<p class="copyright">&copy; 2018<strong>Wave</strong>Vision Degital Ltd. all rights reserved.</p>
		 </section>
	 </div>

<script type="text/javascript">//<![CDATA[
head.ready(function() {
head.load("{{asset('home_assets/css/bootstrap.min.css')}}");
head.load("{{asset('home_assets/css/style_home.css?m=1527551825')}}");
head.load("{{asset('home_assets/js/jquery.min.js')}}");
head.load("{{asset('home_assets/js/jquery.color.min.js')}}");
head.load("{{asset('home_assets/js/owl.carousel.min.js')}}");
head.load("{{asset('home_assets/js/script_home.js?m=1527551825')}}");

});

//]]></script>
<script type="text/javascript" src="{{asset('home_assets/js/pageload.js')}}"></script>

</body>
</html>