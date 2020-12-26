@extends('layouts.app')


@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <h2>Search</h2>
                </div>
                <div class="breadcrumb-sibtitle">
                    <h4>Showing results for "{{ $search }}"</h4>
                </div>
            </div>
        </div>
    </div>
</div>
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
