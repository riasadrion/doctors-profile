@extends('layouts.app')


@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <h2>Create Post</h2>
                </div>
                <div class="breadcrumb-sibtitle">
                    <h4>Publish a new post</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-details-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-post box-shadow">
                    <form action="{{ url('/') }}/posts" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group box-shadow">
                            <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                        </div>
                        <div class="form-group box-shadow">
                            <textarea class="descr" name="descr" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Featured Image(640x480 recommended)</label>
                            <input type="file" name="thumb">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" onclick="event.preventDefault();
                            this.closest('form').submit();">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget">
                    <div class="single-widget search-widget box-shadow">
                        <div class="widget-inner">
                            <form action="#">
                                <div class="search-from box-shadow">
                                    <input type="text" id="search" name="search" placeholder="Serach">
                                    <button class="search-icon"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="single-widget profile-widget box-shadow">
                        <div class="widget-inner text-center">
                            <div class="profile-img">
                                <a href="#"><img src="{{ url('/') }}/assets/images/profile/1.png" alt="profile"></a>
                            </div>
                            <div class="profile-name">
                                <h3><a href="#">{{ $user->name }}</a></h3>
                                <p>{{ $user->tagline }}</p>
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
                    <div class="single-widget recent-post-widget box-shadow">
                        <div class="widget-inner">
                            <div class="widget-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-list">
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="assets/images/blog/r1.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">We denounce with right indig</a></h4>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="assets/images/blog/r2.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Voluptatum  atque  delenit   </a></h4>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="assets/images/blog/r3.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Debitis aut rerum necessitatibus   </a></h4>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="posty-img">
                                        <a href="#"><img src="assets/images/blog/r4.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Ndignation and dislike men who</a></h4>
                                    </div>
                                </div>
                                <div class="single-post mb-0">
                                    <div class="posty-img">
                                        <a href="#"><img src="assets/images/blog/r5.png" alt="post"></a>
                                    </div>
                                    <div class="post-title">
                                        <h4><a href="#">Ndignation and dislike men who </a></h4>
                                    </div>
                                </div>
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



@endsection
@section('css')
@endsection

@section('js')
<script src="{{ url('/') }}/assets/js/tinymce.js"></script>
<script>
    tinymce.init({
        selector:'textarea.descr',
        width: 687,
        height: 300
    });
</script>
@endsection
