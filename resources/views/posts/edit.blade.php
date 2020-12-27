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
                    <form action="{{ url('/') }}/posts/{{ $post->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group box-shadow">
                            <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group box-shadow">
                            <textarea class="descr" name="descr"  required>{{ $post->descr }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Featured Image(640x480 recommended)</label>
                            <img src="{{ url('/') }}/storage/post-images/{{ $post->thumb }}" alt="">
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
