<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Trung Tâm Gia Sư</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<link rel="stylesheet" href="{{ asset ('Theme/TrangChuNew/css/slider.css') }}">
	<!-- <link href="css/slider.css" type="text/css" rel="stylesheet" media="all">  -->
	
	<!-- css files -->
	<link rel="stylesheet" href="{{ asset ('Theme/TrangChuNew/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset ('Theme/TrangChuNew/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset ('Theme/TrangChuNew/css/fontawesome-all.css') }}">
	<link rel="stylesheet" href="{{ asset ('Theme/TrangChuNew/css/flexslider.css') }}">

	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<!-- Bootstrap-Core-CSS -->
	<!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />  -->
	<!-- Style-CSS --> 
	<!-- <link rel="stylesheet" href="css/fontawesome-all.css">  -->
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- testimonials css -->
	<!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /> -->
	<!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- web-fonts -->
	<!-- <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- //web-fonts -->
	
</head>

<body>
	
	<!-- banner -->
	<div class="banner" id="home"> 
		<div class="cd-radial-slider-wrapper"> 

			<!--Header-->
			<header>
				<div class="container agile-banner_nav">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">

						<h1><a class="navbar-brand" href="index.html">GIASU<span class="display">TANTAM</span></a></h1>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="services.html">Services</a>
								</li>
								<!-- <li class="dropdown nav-item">
									<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Pages
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="error.html">Error Page</a>
										</li>
										<li>
											<a href="single.html">Single Page</a>
										</li>
									</ul>
								</li> -->

								<li class="nav-item">
									<a class="nav-link" href="projects.html">Projects</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
								</li>
								@guest
								<li class="nav-item">
									<a class="nav-link" data-toggle="modal" href='#modal-id'>Đăng Nhập</a>
								</li>
								@else
								<li class="dropdown nav-item">
									<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">{{ Auth::user()->name }}
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											@if( Auth::user()->loai === 1 )
											<li>
												<a href="{{ route('Profilegs') }}" target="_blank">Quản lí Tài Khoản</a>
											</li>
											@else
											<li>
												<a href="{{ route('Profileph') }}" target="_blank">Quản lí Tài Khoản</a>
											</li>
											@endif
											<li>
												<a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</li>
									</li>

								</ul>
							</li>

							@endguest


						</ul>
					</div>

				</nav>
			</div>
		</header>
		<!--Header-->
		<ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
			<li class="visible"> 
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						<title>Animated SVG</title>
						<defs>
							<clipPath id="cd-image-1">
								<circle id="cd-circle-1" cx="110" cy="400" r="1364"/>
							</clipPath>
						</defs> 
						<image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="{{ asset ('theme/TrangChuNew/images/sl4.jpg') }}" ></image>

					</svg>
				</div> <!-- .svg-wrapper --> 
				<div class="cd-radial-slider-content">
					<div class="wrapper">
						<div class="text-center">
							<h2>Interior Architecture </h2>
							<h3> Furniture </h3>
							<!-- <a href="about.html" class="read">Read More <i class="fas fa-caret-right"></i></a> -->
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li> 
			<li class="next-slide">
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						<title>Animated SVG</title>
						<defs>
							<clipPath id="cd-image-2">
								<circle id="cd-circle-2" cx="1290" cy="400" r="60"/>
							</clipPath>
						</defs> 
						<image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="{{ asset ('theme/TrangChuNew/images/sl1.jpg') }}"></image>
					</svg>
				</div> <!-- .svg-wrapper --> 
				<div class="cd-radial-slider-content text-center">
					<div class="wrapper">
						<div class="text-center"> 
							<h3>Interior Furniture </h3>
							<h3> Architecture </h3>
							<!-- <a href="about.html" class="read">Read More <i class="fas fa-caret-right"></i></a> -->

						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li> 
			<li>
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						<title>Animated SVG</title>
						<defs>
							<clipPath id="cd-image-3">
								<circle id="cd-circle-3" cx="110" cy="400" r="60"/>
							</clipPath>
						</defs> 
						<image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="{{ asset ('theme/TrangChuNew/images/sl6.jpg') }}"></image>
					</svg>
				</div> <!-- .svg-wrapper --> 
				<div class="cd-radial-slider-content text-center">
					<div class="wrapper">
						<div class="text-center"> 
							<h3>Interior Design </h3>
							<h3> Architecture </h3>
							<!-- <a href="about.html" class="read">Read More <i class="fas fa-caret-right"></i></a> -->
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li> 
			<li class="prev-slide">
				<div class="svg-wrapper">
					<svg viewBox="0 0 1400 800">
						<title>Animated SVG</title>
						<defs>
							<clipPath id="cd-image-4">
								<circle id="cd-circle-4" cx="110" cy="400" r="60"/>
							</clipPath>
						</defs> 
						<image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="{{ asset ('theme/TrangChuNew/images/2.jpg') }}"></image>
					</svg>
				</div> <!-- .svg-wrapper --> 
				<div class="cd-radial-slider-content text-center">
					<div class="wrapper">
						<div class="text-center"> 
							<h3>Interior Architecture </h3>
							<h3> furniture </h3>
							<!-- <a href="about.html" class="read">Read More <i class="fas fa-caret-right"></i></a> -->
						</div>
					</div>
				</div> <!-- .cd-radial-slider-content -->
			</li> 
		</ul> <!-- .cd-radial-slider --> 
		<ul class="cd-radial-slider-navigation">
			<li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
			<li><a href="#0" class="prev"><i class="fas fa-chevron-left"></i></a></li>
		</ul> <!-- .cd-radial-slider-navigation -->
	</div> <!-- .cd-radial-slider-wrapper --> 
</div>
<!-- //banner --> 

<!-- about -->
<section class="wthree-row py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize mb-sm-5 mb-4"> Trung Tâm Gia Sư Tận Tâm</h3>
		<div class="row d-flex justify-content-center">
			<div class="card col-lg-3 col-md-6 border-0">
				<div class="card-body bg-light pl-0 pr-0 pt-0">
					<h5 class=" card-title titleleft">Hỗ Trợ Tìm Gia Sư</h5>
					<p class="card-text mb-3">Bạn cần tìm gia sư? Cần tìm một gia sư uy tín.</p>
					<a href="#ab-bot" class="btn scroll">View More</a>
				</div>
				<img class="card-img-top" src="{{ asset ('theme/TrangChuNew/images/a1.jpg') }}" alt="Card image cap">
			</div>
			<div class="card col-lg-3 col-md-6 border-0 mt-md-0 mt-5">
				<img class="card-img-top" src="{{ asset ('theme/TrangChuNew/images/a2.jpg') }} " alt="Card image cap ">
				<div class="card-body bg-light text-center">
					<h5 class="card-title pt-3">Quản Lí Hợp Đồng</h5>
					<p class="card-text mb-3 ">Bạn cần quản lí gia sư cho con bạn?</p>
					<a href="#ab-bot" class="btn scroll">View More</a>
				</div>
			</div>
			<div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 ">
				<img class="card-img-top " src="{{ asset ('theme/TrangChuNew/images/a3.jpg') }} " alt="Card image cap ">
				<div class="card-body bg-light text-center">
					<h5 class="card-title pt-3">Đăng Kí Làm Gia Sư</h5>
					<p class="card-text mb-3 ">Bạn đang có nhiều thời gian rảnh?. Bạn muốn trở thành gia sư</p>
					<a href="{{ route('YeuCau.index') }}" target="_blank" >Click Vào Đây</a>
				</div>
			</div>
			<div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 text-right">
				<div class="card-body bg-light pl-0 pr-0 pt-0">
					<h5 class="card-title titleright">Hỗ Trợ Nhận Lớp</h5>
					<p class="card-text mb-3">Thủ tục giao/ nhận lớp.</p>
					<a href="#ab-bot" class="btn scroll">View More</a>
				</div>
				<img class="card-img-top " src="{{ asset ('theme/TrangChuNew/images/a4.jpg') }} " alt="Card image cap ">
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- why choose us -->
<section class="why">
	<div class="layer py-5">
		<div class="container py-3">
			<h3 class="heading text-capitalize mb-sm-5 mb-4"> Tại Sao Nên Chọn Trung Tâm Gia Sư Tận Tâm </h3>
			<div class="row why-grids">
				<div class="col-lg-3 col-sm-6 why-grid1">
					<i class="fas icon fa-tags"></i>
					<h4>Đội Ngũ Gia Sư Uy Tín/ Giàu Kinh Nghiệm</h4>
					<!-- <p class="mb-lg-5 mb-4">Uy Tín</p> -->
					<a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
				<div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 why-grid1">
					<i class="fas icon fa-puzzle-piece"></i>
					<h4>Quy Trình Nhận Lớp Dẽ Dàng</h4>
					<!-- <p class="mb-lg-5 mb-4">Dễ Dàng</p> -->
					<a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 why-grid1">
					<i class="fab icon fa-angellist"></i>
					<h4>Hợp Đồng Minh Bạch</h4>
					<!-- <p class="mb-lg-5 mb-4">taciti aptent</p> -->
					<a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 why-grid1">
					<i class="fas icon fa-dollar-sign"></i>
					<h4>Học Phí Phải Chăng</h4>
					<!-- <p class="mb-lg-5 mb-4">taciti aptent</p> -->
					<a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //why choose us -->

<!-- team -->
<section class="w3ls-team py-5">
	<div class="container py-3">
		<h3 class="heading text-capitalize mb-sm-5 mb-4"> Top Gia Sư </h3>
		<div class="row team-grids">
			<div class="col-md-3 col-sm-6 w3_agileits-team1">
				<img class="img-fluid" src="{{ asset ('theme/TrangChuNew/images/t1.jpg') }}" alt="">
				<h5 class="mt-3">Elmore</h5>
				<p>Lorem ipsum</p>
				<div class="social-icons mt-2">
					<ul>
						<li>
							<a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
						</li>
						<li class="mx-1">
							<a href="#" class="fab fa-twitter  icon-border twitter"> </a>
						</li>
						<li>
							<a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-sm-0 mt-5 w3_agileits-team1">
				<img class="img-fluid" src="{{ asset ('theme/TrangChuNew/images/t2.jpg') }}" alt="">
				<h5 class="mt-3">Blanton</h5>
				<p>Lorem ipsum</p>
				<div class="social-icons mt-2">
					<ul>
						<li>
							<a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
						</li>
						<li class="mx-1">
							<a href="#" class="fab fa-twitter  icon-border twitter"> </a>
						</li>
						<li>
							<a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-5 w3_agileits-team1">
				<img class="img-fluid" src="{{ asset ('theme/TrangChuNew/images/t3.jpg') }}" alt="">
				<h5 class="mt-3"> Bass</h5>
				<p>Lorem ipsum</p>
				<div class="social-icons mt-2">
					<ul>
						<li>
							<a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
						</li>
						<li class="mx-1">
							<a href="#" class="fab fa-twitter  icon-border twitter"> </a>
						</li>
						<li>
							<a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 mt-md-0 mt-5 w3_agileits-team1">
				<img class="img-fluid" src="{{ asset ('theme/TrangChuNew/images/t4.jpg') }}" alt="">
				<h5 class="mt-3"> Glickon</h5>
				<p>Lorem ipsum</p>
				<div class="social-icons mt-2">
					<ul>
						<li>
							<a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
						</li>
						<li class="mx-1">
							<a href="#" class="fab fa-twitter  icon-border twitter"> </a>
						</li>
						<li>
							<a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //team -->

<!-- Clients -->
<section class="clients-main">
	<div class="wthree-different-dot1 py-5">
		<div class="container py-sm-3">
			<!-- Owl-Carousel -->
			<h3 class="heading text-capitalize mb-sm-5 mb-4">What People Say </h3>
			<div class="cli-ent">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
										<img class="lazyOwl" src="{{ asset ('theme/TrangChuNew/images/1.jpg') }}" alt="" />
										<h5>Michael</h5>
										<h4>Best Quality Furniture</h4>
									</div>

									<div class="clearfix"></div>
									<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur.</p>
								</div>
							</li>
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
										<img class="lazyOwl" src="{{ asset ('theme/TrangChuNew/images/2.jpg') }}" alt="" />
										<h5>don libero</h5>
										<h4>Great Place For Great Price</h4>
									</div>

									<div class="clearfix"></div>
									<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur.</p>
								</div>
							</li>
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
										<img class="lazyOwl" src="{{ asset ('theme/TrangChuNew/images/3.jpg') }}" alt="" />
										<h5>Elisa</h5>
										<h4>Lot Of Furniture Design</h4>
									</div>

									<div class="clearfix"></div>
									<p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> Phasellus iaculis sapien in tellus gravida, a placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam sed ultricies tortor. Curabitur ut odio vestibulum consectetur.</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>
</section>
<!--// Clients -->

<!-- latest news -->
<div class="news py-5 my-sm-3">
	<div class="container">
		<h3 class="heading text-capitalize mb-sm-5 mb-4"> Latest News </h3>
		<div class="row news-grids">
			<div class="col-md-4 newsgrid1 text-center">
				<img src="{{ asset ('theme/TrangChuNew/images/gs.jpg') }}" alt="news image" class="img-fluid" style="min-height: 250px !important" />
				<h4 class=" mt-4 text-uppercase">Interior Design Tips</h4>
				<p class="mt-4"> Praesent in congue leo, et rutrum justo. Integer porta nulla eu lorem.</p>
				<a href="single.html">View Post</a>
			</div>
			<div class="col-md-4 mt-md-0 mt-5 newsgrid1 text-center">
				<img src="{{ asset ('theme/TrangChuNew/images/gs.jpg') }}" alt="news image" class="img-fluid"  style="min-height: 250px !important" />
				<h4 class=" mt-4 text-uppercase">Interior Design Tips</h4>
				<p class="mt-4"> Praesent in congue leo, et rutrum justo. Integer porta nulla eu lorem.</p>
				<a href="single.html">View Post</a>
			</div>
			<div class="col-md-4 mt-md-0 mt-5 newsgrid1 text-center">
				<img src="{{ asset ('theme/TrangChuNew/images/gs.jpg') }}" alt="news image" class="img-fluid"  style="min-height: 250px !important" />
				<h4 class=" mt-4 text-uppercase">Interior Design Tips</h4>
				<p class="mt-4"> Praesent in congue leo, et rutrum justo. Integer porta nulla eu lorem.</p>
				<a href="single.html">View Post</a>
			</div>
		</div>
	</div>
</div>
<!-- //latest news -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="index.html">In <span class="display"> Trend</span></a>
		</div>
		<div class="footer-grid">
			<div class="social mb-4 text-center">
				<ul class="d-flex justify-content-center">
					<li class="mx-2"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-twitter"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fas fa-rss"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fab fa-google-plus"></span></a></li>
				</ul>
			</div>
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="services.html">Services</a>
					</li>
					<li>
						<a href="projects.html">Gallery</a>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
			<div class="agileits_w3layouts-copyright mt-4 text-center">
				<p>© 2018 Intrend. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a></p>
			</div>
		</div>
	</div>
</footer>



<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- <div class="modal-header"> -->
				<h2 class="heading text-capitalize mb-sm-5 mb-4" style="margin-left: 20px; margin-bottom: 10px !important"> Đăng Nhập </h2>
			<!-- </div> -->
			<div class="modal-body">
				<div class="mail_grid_w3l">
					<form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
						<div class="row">
							<div class="col-md-6 contact_left_grid" data-aos="fade-left">
								<img src="{{ asset ('theme/TrangChuNew/images/gs.jpg') }}" alt="news image" class="img-fluid"  style="min-height: 100px !important" />
							</div>
							<div class="col-md-6 contact_left_grid" data-aos="fade-right">
								<div class="contact-fields-w3ls">
									<input type="email" name="email" placeholder="Name" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
									@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
									@endif
								</div>
								<div class="contact-fields-w3ls">
									<input type="password" name="password" placeholder="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"  required >
									@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
							</div>
							<div class="col-md-12 contact_left_grid" data-aos="fade-left" style="margin-top: 10px;">
								<input type="submit" data-dismiss="modal" style="width: 45%; background-color: blue; margin-left: 20px" value="Close">
								<input type="submit" value="Đăng Nhập" style="width: 45%; margin-left: 20px" >
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- footer -->

<!-- js-scripts -->		

<!-- js -->
<script src="{{ asset ('theme/TrangChuNew/js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset ('theme/TrangChuNew/js/bootstrap.js') }}"></script>
<script src="{{ asset ('theme/TrangChuNew/js/snap.svg-min.js') }}"></script>
<script src="{{ asset ('theme/TrangChuNew/js/main.js') }}"></script>
<script src="{{ asset ('theme/TrangChuNew/js/jquery.flexslider.js') }}"></script>


<!-- <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script> -->
<!-- <script type="text/javascript" src="js/bootstrap.js"></script>  -->
<!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->

<!-- banner js -->
<!-- <script src="js/snap.svg-min.js"></script> -->
<!-- <script src="js/main.js"></script>  -->
<!-- Resource jQuery -->  
<!-- //banner js --> 

<!-- flexSlider --><!-- for testimonials -->
<!-- <script defer src="js/jquery.flexslider.js"></script> -->
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
<!-- //flexSlider --><!-- for testimonials -->

<!-- start-smoth-scrolling -->
<script src="{{ asset ('theme/TrangChuNew/js/SmoothScroll.min.js') }}"></script>
<script src="{{ asset ('theme/TrangChuNew/js/move-top.js') }}"></script>
<script src="{{ asset ('theme/TrangChuNew/js/easing.js') }}"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script> -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
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
		<!-- //here ends scrolling icon -->
		<!-- start-smoth-scrolling -->

		<!-- //js-scripts -->

	</body>
	</html>