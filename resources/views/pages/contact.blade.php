@extends('layouts.app')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <h2>Contact </h2>
                </div>
                <div class="breadcrumb-sibtitle">
                    <h4>Get in Touch</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-area section">
    <div class="container">
        <div class="contact-info">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-info box-shadow">
                        <div class="info-iiner">
                            <div class="info-incon">
                                <span class="flaticon-telephone"></span>
                            </div>
                            <div class="info-content">
                                <div class="contact-info-title">
                                    <h5>Phone</h5>
                                </div>
                                <div class="contact-info-content">
                                    <p>{{ $user->contact }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-info box-shadow">
                        <div class="info-iiner">
                            <div class="info-incon">
                                <span class="flaticon-black-back-closed-envelope-shape"></span>
                            </div>
                            <div class="info-content">
                                <div class="contact-info-title">
                                    <h5>Email & Web</h5>
                                </div>
                                <div class="contact-info-content">
                                    <p>{{ $user->email }}</p>
                                    <p>{{ $user->web }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-info box-shadow">
                        <div class="info-iiner">
                            <div class="info-incon">
                                <span class="flaticon-maps-and-flags"></span>
                            </div>
                            <div class="info-content">
                                <div class="contact-info-title">
                                    <h5>Address</h5>
                                </div>
                                <div class="contact-info-content">
                                    <p>{{ $user->address_line_1 }}</p>
                                    <p>{{ $user->address_line_2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-form-inner box-shadow">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="from-left">
                                    @if($user->profile_pic)
                                    <img src="/storage/profile-pic/{{ $user->profile_pic }}">
                                    @else
                                    <img src="{{ url('/') }}/assets/images/profile_pic.png" alt="profile"></a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="from-area">
                                    <h3>Send me a message</h3>
                                    <form action="{{ url('/') }}/contact-email" method="post">
                                        @csrf
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email address ">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <textarea name="body" id="body" cols="30" rows="10" placeholder="Write your message"></textarea>
                                        </div>
                                        <div class="from-btn text-right">
                                            <button type="submit" class="primary-btn">Submit</button>
                                        </div>
                                    </form>
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
