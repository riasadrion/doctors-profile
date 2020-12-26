<!DOCTYPE HTML>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="smartit-source">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- title here -->
		<title>@yield('title')</title>
        <!-- Favicon and Touch Icons -->
        <link rel="shortcut icon" href="{{ url('/') }}/assets/images/fav.png">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/flaticon.css">
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/owl.carousel.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/owl.theme.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/owl.transitions.css">
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/jquery.barfiller.css">
		<!--Theme custom css -->
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
		<!--Theme Responsive css-->
		<link rel="stylesheet" href="{{ url('/') }}/assets/css/responsive.css" />
        <script src="{{ url('/') }}/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        @yield('css')
	</head>
	<body>
		<!-- header area start here -->
		<header class="header-area" id="sticky">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-xs-6">
						<div class="log-area">
							<a href="index.html"><img src="{{ url('/') }}/assets/images/logo1.png" alt=""></a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="menu-area white">
							<nav>
								<ul>
									<li class="active"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li><a href="{{ url('/') }}/profile">Profile</a></li>
                                    {{-- <li><a href="{{ url('/') }}/blog">Blog</a></li> --}}
                                    {{-- <li><a href="{{ url('/') }}/contact">Contact me</a></li> --}}
                                    @if (!Auth::guest())
                                    <li><a href="{{ url('/') }}/edit-profile">Update Profile</a></li>
                                    <li><form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="javascript:void(0)" onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                                    </form></li>
                                    @else
                                    <li><a href="{{ url('/') }}/login">Login</a></li>
                                    @endif
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-md-1 col-xs-6">
						<div class="humbargar-area">
							<div class="menu-icon text-right">
								<span class="flaticon-menu humbargar color"></span>
							</div>
							<div class="close-area">
								<span class="close"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header area start here -->
		<!-- menu area start here -->
		<div class="sidebar-menu ">
			<div class="close-area">
				<span class="close"><i class="icon fa fa-times-circle"></i></span>
			</div>
			<div class="main-menu">
				<nav>
					<ul>
						<li class="active"><a href="{{ url('/') }}">Home</a>
						</li>
						<li><a href="{{ url('/') }}/profile">Profile</a></li>
						<li><a href="{{ url('/') }}/blog">Blog</a></li>
                        <li><a href="{{ url('/') }}/contact">Contact me</a></li>
                        @if (!Auth::guest())
                        <li><form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="javascript:void(0)" onclick="event.preventDefault();
                            this.closest('form').submit();">Logout</a>
                        </form></li>
                        @else
                        <li><a href="{{ url('/') }}/login">Login</a></li>
                        @endif
					</ul>
				</nav>
			</div>
		</div>
		<!-- menu area start here -->
        @yield('content')
		<!-- footer area start here -->
		<footer class="footer-area">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-widget widget-text">
								<div class="footer-logo">
									<h2><a href="#">Paris </a></h2>
								</div>
								<div class="widget-content">
									<p>Lorem Ipsum is simply dummy
										text of the printing and typesetting
										industry. Lorem Ipsum has been
										the industry's standard dummy
										text ever since the 1500s, when an
										unknown printer took a galley of
										type and scrambled it to make a
										type specimen book. It has survive
										not only five centuries, but also the
										 leap into electronic typesetting, </p>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-widget widget-nave">
								<div class="widget-title">
									<h3>Quick Link</h3>
								</div>
								<div class="widget-nave-list">
									<ul>
										<li><a href="#">Fashion </a></li>
										<li><a href="#">Life style</a></li>
										<li><a href="#">Creative</a></li>
										<li><a href="#">Traveling</a></li>
										<li><a href="#">Guide</a></li>
										<li><a href="#">World Tour</a></li>
										<li><a href="#">Ship Tour</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-widget widget-recent-post">
								<div class="widget-title">
									<h3>Recent Post</h3>
								</div>
								<div class="recent-post-list">
									<div class="single-post">
										<p><a href="#">We denounce with righteou
											indignation and dislike</a></p>
									</div>
									<div class="single-post">
										<p><a href="#">We denounce with righteou
											indignation and dislike</a></p>
									</div>
									<div class="single-post last">
										<p><a href="#">We denounce with righteou
											indignation and dislike</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-widget widget-Subscribe">
								<div class="widget-title">
									<h3>Subscribe Us</h3>
								</div>
								<div class="widget-Subscribe-form">
									<form action="#">
										<div class="from-grupe">
											<input type="email" name="email" placeholder="Enter your email" id="email">
											<button type="submit" class="submit-btn">Submit</button>
										</div>
									</form>
								</div>
								<div class="widget-content">
									<p>Blinded by desire, that they can
										foresee the pain and trouble that
										are bound to ensue</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="copyright-area">
								<p>&copy; 2018 Paris . All rights Reserved.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="footer-right text-right">
								<p>Design By <a href="#">Createuiux</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer area end here -->
		<!-- js file start -->
		<script src="{{ url('/') }}/assets/js/vendor/jquery-1.12.0.min.js"></script>
		<script src="{{ url('/') }}/assets/js/plugins.js"></script>
		<script src="{{ url('/') }}/assets/js/Popper.js"></script>
		<script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
		<script src="{{ url('/') }}/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="{{ url('/') }}/assets/js/owl.carousel.min.js"></script>
		<script src="{{ url('/') }}/assets/js/isotope.pkgd.min.js"></script>
		<script src="{{ url('/') }}/assets/js/imagesloaded.pkgd.min.js"></script>
		<script src="{{ url('/') }}/assets/js/scrollup.js"></script>
		<script src="{{ url('/') }}/assets/js/jquery.counterup.min.js"></script>
		<script src="{{ url('/') }}/assets/js/waypoints.min.js"></script>
		<script src="{{ url('/') }}/assets/js/jquery.appear.js"></script>
		<script src="{{ url('/') }}/assets/js/jquery.barfiller.js"></script>
        <script src="{{ url('/') }}/assets/js/main.js"></script>
        @yield('js')
		<!-- End js file -->
	</body>
</html>
