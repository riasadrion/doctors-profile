@extends('layouts.app')


@section('content')
<!-- banner area start here -->
<div class="banner-area banner-three">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-content">
                    <div class="banner-title white">
                        <h1>{{ $user->name }}</h1>
                    </div>
                    <div class="banner-subtitle white ">
                        <h4>{{ $user->tagline }}</h4>
                    </div>
                    <div class="banner-info">
                        <p>{{ $user->about }}</p>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li class="active"><a href="{{ $user->fb }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $user->tw }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $user->in }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $user->gram }}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-img">
                    <img src="{{ url('/') }}/assets/images/banner/4.png"  alt="banner">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area start here -->
<!-- post area start here	 -->
		<div class="post-two-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="post-list">
                            @foreach ($posts as $index => $post)
							<div class="single-post">
                                <div class="inner-post">
									<div class="post-img">
										<a href="{{ url('/') }}/posts/{{ $post['id'] }}"><img src="{{ url('/') }}/storage/post-images/{{ $post['thumb'] }}" alt="blog"></a>
									</div>
									<div class="post-info">
										<div class="post-title" style="max-width: 345px">
											<h3 style="line-height: 30px"><a href="{{ url('/') }}/posts/{{ $post['id'] }}">{{ $post['title'] }}</a></h3>
										</div>
										<div class="post-content">
											{!! $post['descr'] !!}
										</div>
										<div class="blog-meta fix" >
											<div class="meta-left pull-left">
												<ul>
													<li> <span class="flaticon-calendar clendar"></span> <p>{{ \Carbon\Carbon::parse($post['created_at'] )->format('j F, Y')}}</p></li>
												</ul>
											</div>
											<div class="post-readmore pull-right">
												<a href="{{ url('/') }}/posts/{{ $post['id'] }}" class="readmore-btn">Read More <span>+</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="post-date one">
									<span>0{{ $index + 1 }}</span>
								</div>
                            </div>
                            @endforeach
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebar-widget">
							<div class="single-widget profile-widget box-shadow">
								<div class="widget-inner text-center">
									<div class="profile-img">
										<a href="#"><img src="{{ url('/') }}/assets/images/profile/1.png" alt="profile"></a>
									</div>
									<div class="profile-name">
										<h3><a href="#">Jhon Smith</a></h3>
										<p>Professional Blogger</p>
									</div>
									<div class="social-media">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-skype"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="single-widget category-widget box-shadow">
								<div class="widget-inner">
									<div class="widget-title">
										<h3>Category</h3>
									</div>
									<div class="category-list">
										<ul>
											<li class="active"><a href="#">Fashion   <span>10</span></a></li>
											<li><a href="#">Life style   <span>20</span></a></li>
											<li><a href="#">Creative   <span>30</span></a></li>
											<li><a href="#">Traveling   <span>40</span></a></li>
											<li><a href="#">Guide   <span>10</span></a></li>
											<li><a href="#">World Tour   <span>20</span></a></li>
											<li><a href="#">Ship Tour   <span>30</span></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="single-widget recent-post-widget box-shadow">
								<div class="widget-inner">
									<div class="widget-title">
										<h3>Recent Post</h3>
									</div>
									<div class="recent-post-list">
										<div class="single-post">
											<div class="posty-img">
												<a href="#"><img src="{{ url('/') }}/assets/images/blog/r1.png" alt="post"></a>
											</div>
											<div class="post-title">
												<h4><a href="#">We denounce with right indig</a></h4>
											</div>
										</div>
										<div class="single-post">
											<div class="posty-img">
												<a href="#"><img src="{{ url('/') }}/assets/images/blog/r2.png" alt="post"></a>
											</div>
											<div class="post-title">
												<h4><a href="#">Voluptatum  atque  delenit   </a></h4>
											</div>
										</div>
										<div class="single-post">
											<div class="posty-img">
												<a href="#"><img src="{{ url('/') }}/assets/images/blog/r3.png" alt="post"></a>
											</div>
											<div class="post-title">
												<h4><a href="#">Debitis aut rerum necessitatibus   </a></h4>
											</div>
										</div>
										<div class="single-post">
											<div class="posty-img">
												<a href="#"><img src="{{ url('/') }}/assets/images/blog/r4.png" alt="post"></a>
											</div>
											<div class="post-title">
												<h4><a href="#">Ndignation and dislike men who</a></h4>
											</div>
										</div>
										<div class="single-post mb-0">
											<div class="posty-img">
												<a href="#"><img src="{{ url('/') }}/assets/images/blog/r5.png" alt="post"></a>
											</div>
											<div class="post-title">
												<h4><a href="#">Ndignation and dislike men who </a></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="single-widget banner-widget box-shadow">
								<div class="banner-img">
									<a href="#"><img src="{{ url('/') }}/assets/images/banner/2.png" alt="profile"></a>
									<div class="banner-title">
										<h3>Banner Space Here</h3>
									</div>
								</div>
							</div>
							<div class="single-widget instagram-widget box-shadow">
								<div class="widget-inner">
									<div class="widget-title">
										<h3>Instagram</h3>
									</div>
									<div class="instagram-list">
										<ul>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/1.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/2.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/3.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/4.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/5.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/6.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/7.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/8.png" alt="instagram"></a></li>
											<li><a href="#"><img src="{{ url('/') }}/assets/images/instagram/9.png" alt="instagram"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- leaf left area start here	 -->
			<div class="leaf-left">
				<img src="{{ url('/') }}/assets/images/leaf-left.png" alt="leaf-right">
			</div>
			<!-- leaf left area end here	 -->
			<!-- leaf right area start here	 -->
			<div class="leaf-right">
				<img src="{{ url('/') }}/assets/images/leaf-right.png" alt="leaf-right">
			</div>
			<!-- leaf right area end here	 -->
		</div>
		<!-- post area end here	 -->
@endsection
