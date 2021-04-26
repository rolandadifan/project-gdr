@extends('layouts.landing')
@include('sweetalert::alert')
@section('content')
<div class="jumbotron__profile">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron__breadcrumb mb-3">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Student Enrollment</li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="jumbotron__preview py-3 mt-3">
                        <div class="row row-cols-md-2 row-cols-1 gy-3 justify-content-between align-items-center">
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <div class="jumbotron__imgBx">
                                         @if (!$user)
                                         <img src="{{ asset('assets/images/avatar-default.png')}}" alt="profile">
                                         @else
                                         <img src="{{ Storage::url($user->avatar)}}" alt="profile">
                                         @endif
                                    </div>
                                    <div class="jumbotron__profileContent px-4">
                                        <h4>Hello..</h4>
                                        <h4>{{ Auth()->user()->name }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 offset-md-4">
                                <a href="{{ route('profile.view') }}" class="btn jumbotron__editProfileBtn d-block mx-auto">
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container-fluid">
            <div id="profile" class="p-2">
                <div class="profile__header">
                    <h2>International Programs</h2>
                    <h4>PROFILE</h4>
                </div>
                <div class="profile__context">
                    <div class="container-fluid">
                        <div class="row rows-cols-1 g-3 justify-content-center align-items-center">
                            <div class="col">
                                <!-- App management landing page -->
                                <div class="applicationManagement">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <h5>Application Management</h5>
                                                        <div class="table__app">
                                                            <p>Your Applications</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="47%" scope="col">Type</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Started</th>
                                                                        <th scope="col">Submitted</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="4">You have not yet started an
                                                                            application using this account.</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row event px-5 mt-2">
                            <div class="col">
                                <h4>Events</h4>
                                <div class="event__contents">
                                    <div class="card my-2">
                                        <div class="row row-cols-md-2 align-items-center">
                                            <div class="col-md-7">
                                                <div class="event__content">
                                                    <h3>
                                                        The Importance of Implementing Social Distancing to
                                                        Prevent COVID-19
                                                    </h3>
                                                    <p>
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing
                                                        elit. Saepe et blanditiis quia earum alias quisquam,
                                                        molestias totam consectetur illo similique aliquam
                                                        quidem illum consequatur nobis repudiandae sapiente,
                                                        fuga veritatis. Minima.
                                                    </p>
                                                    <a href="#">Read More...</a>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="event__boxImg">
                                                    <img src="./../../assets/images/Mask Group 13.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card my-2">
                                        <div class="row row-cols-md-2 align-items-center">
                                            <div class="col-md-5">
                                                <div class="event__boxImg">
                                                    <img src="./../../assets/images/Mask Group 11.png" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="event__content">
                                                    <h3>
                                                        The Importance of Implementing Social Distancing to
                                                        Prevent COVID-19
                                                    </h3>
                                                    <p>
                                                        Lorem ipsum, dolor sit amet consectetur adipisicing
                                                        elit. Saepe et blanditiis quia earum alias quisquam,
                                                        molestias totam consectetur illo similique aliquam
                                                        quidem illum consequatur nobis repudiandae sapiente,
                                                        fuga veritatis. Minima.
                                                    </p>
                                                    <a href="#">Read More...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest news -->
        <div class="container latestNews__profile p-4">
            <div class="latestNews__header mb-3">
                <h4>Latest News</h4>
            </div>
            <div class="row rows-cols-1 rows-cols-md-2 latestNews__content">
                <div class="col">
                    <div class="latestNews__col--header">
                        <h6>COVID-19</h6>
                        <p>The Importance of Implementing Social Distancing to Prevent COVID-19</p>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod a sint nobis corrupti nesciunt,
                        minus voluptas labore error! Autem quia rem in cumque eaque excepturi ipsum veritatis,
                        distinctio soluta nemo!</p>

                    <a href="#">Read more..</a>
                </div>
                <div class="col">
                    <div class="latestNews__col--header">
                        <h6>University</h6>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed m. </p>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod a sint nobis corrupti nesciunt,
                        minus voluptas labore error! Autem quia rem in cumque eaque excepturi ipsum veritatis,
                        distinctio soluta nemo!</p>

                    <a href="#">Read more..</a>
                </div>
            </div>
        </div>
        @include('include.contact')
    </div>
@endsection