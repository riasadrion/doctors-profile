@extends('layouts.app')

@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <h2>Update Profile</h2>
                </div>
                <div class="breadcrumb-sibtitle">
                    <h4>Bio</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-area section">
    <div class="container">
        <div class="contact-form">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-form-inner box-shadow">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="from-left">
                                    @if($user->profile_pic)
                                    <img src="/storage/profile-pic/{{ $user->profile_pic }}">
                                    @else
                                    <img src="{{ url('/') }}/assets/images/profile_pic.png" alt="profile"></a>
                                    @endif
                                    <form action="/upload-pic" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <label for="">Image size 400x400 pixel is recommended</label>
                                        <input type="file" name="profile_pic" class="form-control-file">
                                        <br>
                                        <div class="text-left mt-2">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="from-left" style="margin-top: 30px">
                                    @if($user->logo)
                                    <img src="/storage/logo/{{ $user->logo }}">
                                    @else
                                    <img src="{{ url('/') }}/assets/images/logo1.png" alt="profile"></a>
                                    @endif
                                    <form action="/upload-logo" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <label for="">Logo Upload</label>
                                        <input type="file" name="logo" class="form-control-file">
                                        <br>
                                        <div class="text-left mt-2">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="from-area">
                                    <form action="/update-profile" method="post">
                                        @csrf
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Enter your Name">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="email" class="form-control" id="emailthree" name="email" value="{{ $user->email }}" placeholder="Enter Your Email address ">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="tagline" name="tagline" value="{{ $user->tagline }}" placeholder="Enter your tagline">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <label style="margin: 10px 0px 0px 20px" for="">Date of birth ({{ \Carbon\Carbon::parse($user->dob)->format('m/d/Y')}})</label>
                                            <input type="date" class="form-control" id="tagline" name="dob">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="institute" name="institute" value="{{ $user->institute }}" placeholder="Institute">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" id="contact" name="contact" value="{{ $user->contact }}" placeholder="Enter your contact Number">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <textarea name="about" id="" cols="30" rows="10" placeholder="Short description about yourself">{{ $user->about }}</textarea>
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="address_line_1" value="{{ $user->address_line_1 }}" placeholder="Address line 1">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="address_line_2" value="{{ $user->address_line_2 }}" placeholder="Address line 2">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="web" value="{{ $user->web }}" placeholder="website link">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="fb" value="{{ $user->fb }}" placeholder="Facebook link">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="tw" value="{{ $user->tw }}" placeholder="Twitter link">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="in" value="{{ $user->in }}" placeholder="Linkedin link">
                                        </div>
                                        <div class="form-group box-shadow">
                                            <input type="text" class="form-control" name="gram" value="{{ $user->gram }}" placeholder="Instagram link">
                                        </div>
                                        <div class="form-group">
                                            <label for="">New Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="New Password" autocomplete="new-password">
                                        </div>
                                        <div class="from-btn text-right">
                                            <button type="submit" class="btn btn-success">Update</button>
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
        <img src="assets/images/leaf-left.png" alt="leaf-right">
    </div>
    <!-- leaf left area end here	 -->
    <!-- leaf right area start here	 -->
    <div class="leaf-right">
        <img src="assets/images/leaf-right.png" alt="leaf-right">
    </div>
    <!-- leaf right area end here	 -->
</div>
@endsection
