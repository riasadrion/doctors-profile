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
                <div class="banner-img" style="margin-top: 50px;">
                    @if($user->profile_pic)
                    <img src="/storage/profile-pic/{{ $user->profile_pic }}">
                    @else
                    <img src="{{ url('/') }}/assets/images/profile_pic.png" alt="profile"></a>
                    @endif
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
                                        @if($post->thumb)
                                        <a href="{{ url('/') }}/posts/{{ $post['id'] }}"><img src="{{ url('/') }}/storage/post-images/{{ $post['thumb'] }}" alt="blog"></a>
                                        @else
                                        <img src="{{ url('/') }}/assets/images/blog/1.jpg" alt="blog"></a>
                                        @endif
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
                        {{ $posts->links() }}
					</div>
					<div class="col-lg-4">
						<div class="sidebar-widget">
							@include('components.sidebar')
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
