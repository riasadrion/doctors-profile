@extends('layouts.app')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
    </div>
</div>
<div class="blog-details-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-post box-shadow">
                    <div class="post-thumnile">
                        <div class="owl-item" style="width: 690px;">
                            <div class="single-image" style="margin-bottom: 20px">
                                <img src="{{ url('/') }}/storage/post-images/{{ $post->thumb }}" alt="blog">
                            </div>
                    </div>
                    <div class="post-title">
                        <h3>{{ $post->title }} @if (!Auth::guest()) <a class="btn btn-warning" href="{{ url('/') }}/posts/{{ $post->id }}/edit">Edit</a>@endif</h3>
                    </div>
                    <div class="blog-meta">
                        <ul>
                            <li> <span class="flaticon-calendar clendar"></span> <p>{{ \Carbon\Carbon::parse($post->created_at)->format('j F, Y') }}   </p></li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        {!! $post->descr !!}
                    </div>
                </div>
            </div></div>
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
@endsection
