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
                                    @if (!isset(auth()->user()->userDetail->avatar))
                                    <img src="{{ asset('assets/images/avatar-default.png')}}" alt="profile">
                                    @else
                                    <img src="{{ Storage::url(auth()->user()->userDetail->avatar)}}" alt="profile">
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
<main>
    <div class="container-fluid">
        <div id="profile" class="p-2">
            <div class="profile__header">
                <h2>International Programs</h2>
                <h4>PROFILE</h4>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>    
                @endif
            </div>
            <div class="profile__context">
                <div class="container-fluid">
                    <div class="row rows-cols-1 g-3 justify-content-center align-items-center">
                        <div class="col">
                            <!-- App management landing page -->
                            <div class="tableApplication">
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
                                                                    {{-- <th scope="col">Started</th> --}}
                                                                    <th scope="col">Submitted</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                    @forelse ($userEnroll as $enrol)
                                                                    <tr>
                                                                        <td class="first__td">{{$enrol->course->name}}</td>
                                                                        <td>{{$enrol->status_id == 4 ? 'Submitted' : 'In Progress'}}</td>
                                                                        {{-- <td>02/17/2021</td> --}}
                                                                        <td>{{ date('d/m/Y', strtotime($enrol->created_at))}}</td>
                                                                        <td>
                                                                            @if ($enrol->status_id == 3)
                                                                                <a href="{{ route('enrollment.edit') }}" class="btn btn__editAction">
                                                                                    Edit
                                                                                </a>
                                                                            @else
                                                                                <button disabled class="btn btn__editAction">
                                                                                    Done
                                                                                </button>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @empty
                                                                        <tr class="text-center">
                                                                            No Data Here
                                                                        </tr>
                                                                    @endforelse
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
                                @forelse ($news1 as $n1)
                                <div class="card my-2">
                                    <div class="row row-cols-md-2 align-items-center">
                                        <div class="col-md-7">
                                            <div class="event__content">
                                                <h3>
                                                   {{$n1->articleDetail->title}}
                                                </h3>
                                                <p>
                                                    {{$n1->articleDetail->excerpt}}
                                                </p>
                                                <a href="{{ route('page.detail', $n1->articleDetail->slug) }}">Read More...</a>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event__boxImg">
                                                <img src="{{ Storage::url($n1->articleDetail->thumbnail) }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <p class="text-center">No Data Here</p>
                                @endforelse
                                @forelse ($news2 as $n2)
                                <div class="card my-2">
                                    <div class="row row-cols-md-2 align-items-center">
                                        <div class="col-md-5">
                                            <div class="event__boxImg">
                                                <img src="{{ Storage::url($n2->articleDetail->thumbnail) }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="event__content">
                                                <h3>
                                                    {{$n2->articleDetail->title}}
                                                </h3>
                                                <p>
                                                   {{$n2->articleDetail->excerpt}}
                                                </p>
                                                <a href="{{ route('page.detail', $n2->articleDetail->slug) }}">Read More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <p class="text-center">No Data Here</p>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest news -->
    <!-- latest event -->
     <div class="container-fluid my-5 latestNews p-4">
        <div class="latestNews__header mb-3">
            <h4>Latest Event</h4>
        </div>
        <div class="row rows-cols-1 rows-cols-md-2 latestNews__content">
            @forelse ($article as $ar)
            <div class="col">
                <div class="latestNews__col--header">
                    <h6>{{ $ar->group }}</h6>
                    <p>{{ $ar->articleDetail->title }}</p>
                </div>
                <p>{{$ar->articleDetail->excerpt}}</p>

                <a href="{{ route('page.detail',$ar->articleDetail->slug ) }}">Read more..</a>
            </div>
            @empty
                 <p class="text-center">No Data Found</p>
            @endforelse
           
        </div>
    </div>
</main>

@endsection