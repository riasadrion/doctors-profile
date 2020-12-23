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
                    @if (!Auth::guest())
                            <a class="btn btn-warning" href="{{ url('/') }}/edit-profile"> Edit Profile</a>
                    @endif
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
                        <h3>Education
                            @if (!Auth::guest())
                            <a href="javascript:void(0)"><i data-toggle="modal" data-target="#education" class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        @endif</h3>
                    </div>
                    <div class="education-list">
                        @foreach ($educations as $index => $element)
                        <div class="single-education">

                            <div class="row">
                                <div class="col-md-3">
                                    <p><span>{{ $index + 1 }}</span>{{$element['degree']}}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>{{$element['institute']}}</p>
                                </div>
                                <div class="col-md-3 text-right">
                                    <p><span class="flaticon-calendar"></span>{{$element['from_to']}} </p>

                                </div>
                                <div class="col-md-2 text-right">
                                    @if (!Auth::guest())
                                    <form method="post" action="/del-edu/{{ $element['id'] }}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit" onclick="alert('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-12 col-md-12 ">
                <div class="single-resume work-resume box-shadow">
                    <div class="resume-title">
                        <h3>Work Expriance
                            @if (!Auth::guest())
                            <a href="javascript:void(0)"><i data-toggle="modal" data-target="#work" class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        @endif</h3>
                    </div>
                    <div class="work-list">
                        @foreach ($works as $index => $element)
                        <div class="single-work">

                            <div class="row">
                                <div class="col-md-3">
                                    <p><span>{{ $index + 1 }}</span>{{$element['designation']}}</p>
                                </div>
                                <div class="col-md-4">
                                    <p class="midden"><span class="flaticon-college-graduation"></span>{{$element['institute']}}</p>
                                </div>
                                <div class="col-md-3 text-right">
                                    <p><span class="flaticon-calendar"></span>{{$element['from_to']}} </p>

                                </div>
                                <div class="col-md-2 text-right">
                                    @if (!Auth::guest())
                                    <form method="post" action="/del-work/{{ $element['id'] }}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" type="submit" onclick="alert('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-md-12 ">
                <div class="single-resume skill-resume box-shadow">
                    <div class="resume-title">
                        <h3>Professional Skill
                        @if (!Auth::guest())
                        <a href="javascript:void(0)"><i data-toggle="modal" data-target="#skill" class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        @endif</h3>
                    </div>
                    <div id="progress-bar">
                        @php $bar = 1; @endphp
                        @foreach ($skills as $skill)
                        <div class="single-skill">
                            <p>{{ $skill->name }}
                            @if (!Auth::guest())
                            <form method="post" action="/del-skill/{{ $skill->id }}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="alert('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            </form>
                            @endif
                            </p>
                            <div id="bar{{ $bar }}" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="{{ $skill->percent }}"></span>
                            </div>
                        </div>
                        @php $bar++ @endphp
                        @endforeach
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

 <!-- Add Education -->
  <div class="modal fade" id="education" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" name="degree" placeholder="Degree" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="institute" placeholder="Institute" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="from_to" placeholder="From - to(ex. 2012 - 2015)" required>
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

 <!-- Add Work -->
  <div class="modal fade" id="work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/create-work" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="designation" placeholder="Designation" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="institute" placeholder="Institute" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="from_to" placeholder="From - to(ex. 2012 - 2015)" required>
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

 <!-- Add Skill -->
  <div class="modal fade" id="skill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/create-skill" method="post">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="percent" placeholder="Percent" max="100" required>
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
