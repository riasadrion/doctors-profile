@php
$r_posts = DB::table('posts')->limit(5)->get();
@endphp
<div class="single-widget search-widget box-shadow">
    <div class="widget-inner">
        <form action="/search" method="post">
            @csrf
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
            @if($user->profile_pic)
            <a href="#"><img src="{{ url('/') }}/storage/profile-pic/{{ $user->profile_pic }}" alt="profile"></a>
            @else
            <a href="#"><img src="{{ url('/') }}/assets/images/profile_pic.png" alt="profile"></a>
            @endif
        </div>
        <div class="profile-name">
            <h3><a href="{{ url('/') }}/profile">{{ $user->name }}</a></h3>
            <p>{{ $user->tagline }}</p>
        </div>
        <div class="social-media">
            <ul>
                <li><a href="{{ $user->fb }}"><i class="fa fa-facebook"></i></a></li>
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
            @foreach ($r_posts as $post)
            <div class="single-post">
                <div class="posty-img">
                    <a href="{{ url('/') }}/posts/{{ $post->id }}"><img src="{{ url('/') }}/storage/post-images/{{ $post->thumb }}" alt="post"></a>
                </div>
                <div class="post-title">
                    <h4><a href="{{ url('/') }}/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
