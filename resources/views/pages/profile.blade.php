@extends('layouts.app')


@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-title">
                    <h2>About Me</h2>
                </div>
                <div class="breadcrumb-sibtitle">
                    <h4>Intoducing myself</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="profile-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 ">
                <div class="profile-img box-shadow">
                    <img src="/storage/profile-pic/{{ $user->profile_pic }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="profile-info">
                    <div class="profile-name">
                        <h2>{{ $user->name }}</h2>
                    </div>
                    <div class="profile-profason">
                        <h4>{{ $user->tagline }}</h4>
                    </div>
                    <div class="frofile-detels table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td><span>Date if Birth</span> </td>
                                    <td> <b>:</b> </td>
                                    <td>{{ \Carbon\Carbon::parse($user->dob)->format('j F, Y') }} </td>
                                </tr>
                                <tr>
                                    <td><span>Phone</span></td>
                                    <td> <b>:</b> </td>
                                    <td>{{ $user->contact }}</td>
                                </tr>
                                <tr>
                                    <td><span>Email</span></td>
                                    <td> <b>:</b> </td>
                                    <td><a href="{{ $user->email }}">{{ $user->email }}</a></td>
                                </tr>
                                <tr>
                                    <td><span>Website</span> </td>
                                    <td> <b>:</b> </td>
                                    <td><a href="{{ $user->web }}">{{ $user->web }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="{{ $user->fb }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $user->tw }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $user->in }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $user->gram }}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="counter-list">
                        <div class="single-counter text-center box-shadow">
                            <div class="counter-item">
                                <h1 class="counter">100</h1>
                            </div>
                            <div class="counter-title">
                                <h4>Travel Country</h4>
                            </div>
                        </div>
                        <div class="single-counter text-center box-shadow">
                            <div class="counter-item">
                                <h1 class="counter">200</h1>
                            </div>
                            <div class="counter-title">
                                <h4>Photo Award</h4>
                            </div>
                        </div>
                        <div class="single-counter text-center box-shadow">
                            <div class="counter-item">
                                <h1 class="counter">300</h1>
                            </div>
                            <div class="counter-title">
                                <h4>Travel Guide</h4>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-12 col-md-12 ">
                <div class="single-resume education-resume box-shadow">
                    <div class="resume-title">
                        <h3>Education</h3>
                    </div>
                    <div class="education-list">
                        <div class="single-education">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>01</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Envato University  </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2010-2014 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-education">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>02</span>B.sc in Computer Engineer   </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Themeforest University  </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2014-2018 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-education">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>03</span>B.sc in Computer Engineer  </p>
                                </div>
                                <div class="col-md-4 ">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Graphiv River University  </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2012-2022 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-12 col-md-12 ">
                <div class="single-resume work-resume box-shadow">
                    <div class="resume-title">
                        <h3>Work Expriance</h3>
                    </div>
                    <div class="work-list">
                        <div class="single-work">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>01</span>B.sc in Computer Engineer </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Envato University  </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2010-2014 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-work">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>02</span>B.sc in Computer Engineer   </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Themeforest University  </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2014-2018 </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-work">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><span>03</span>B.sc in Computer Engineer  </p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>Graphiv River University  </p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <p><span class="flaticon-calendar"></span>2012-2022 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-6 col-md-12 ">
                <div class="single-resume skill-resume box-shadow">
                    <div class="resume-title">
                        <h3>Professional Skill</h3>
                    </div>
                    <div id="progress-bar">
                        <div class="single-skill">
                            <p>Auto cade</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Photoshop</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="84"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Illustrator</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="96"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Auto cade</p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="92"></span>
                            </div>
                        </div>
                        <div class="single-skill">
                            <p>Photoshop</p>
                            <div id="bar5" class="barfiller mb-0">
                                <div class="tipWrap">
                                <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="single-resume language-resume box-shadow">
                    <div class="resume-title">
                        <h3>Language Skill</h3>
                    </div>
                    <div class="language-list">
                        <div class="row">
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language">
                                    <div class="barcontainer">
                                        <div class="bar bar1"></div>
                                    </div>
                                    <span class="title">English</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language">
                                    <div class="barcontainer">
                                        <div class="bar bar2"></div>
                                    </div>
                                    <span class="title">Bangla</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language mt-30">
                                    <div class="barcontainer">
                                        <div class="bar bar3"></div>
                                    </div>
                                    <span class="title">Turkey</span>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-language mt-30">
                                    <div class="barcontainer">
                                        <div class="bar bar4"></div>
                                    </div>
                                    <span class="title">Hindi</span>
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




{{-- modals --}}


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Add Education
</button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/create-education" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="degree" placeholder="Degree">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="institute" placeholder="Institute">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="from_to" placeholder="From - to(ex. 2012 - 2015)">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>



@endsection
