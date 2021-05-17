@extends('layouts.landing')
@section('content')
<!-- jumbotron -->
<div class="jumbotron">
    <div class="jumbotron__overlay"></div>
    <div class="jumbotron__background">
        @if(isset($landingVidSection1->value))
        <style>
        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            padding-top: 25px;
            height: 0;
        }

        .videoWrapper iframe {
            position: absolute;
            top: -10rem;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -99;
        }
        </style>
        <div class="videoWrapper">
            <iframe frameborder="0" style="width: 100vw;height: -webkit-fill-available;"
                src="https://www.youtube.com/embed/{{$landingVidSection1->value}}?autoplay=1&mute=1&loop=1&rel=0&controls=0&showinfo=0&modestbranding=1&autohide=1&showinfo=0&playlist={{$landingVidSection1->value}}"
                allowfullscreen>
                Your browser does not support the video.
            </iframe>
        </div>
        @else
        <img src="{{$landingBgSection1->thumbnail == null ?  asset('assets/images/jumbotron-min.png') : Storage::url($landingBgSection1->thumbnail) }}"
            alt="Jumbotron" />
        @endif
    </div>
    <div class="jumbotron__content">
        <h2>{!!$landingTitle ? $landingTitle->value : 'GET YOUR DEGREE WITH US' !!}</h2>
        <p>{!!$landingExcerpt ? $landingExcerpt->value : 'Beside providing you with new knowledge and raining in chosen
            disciplines Our university also gives you opportunity to benefit from spending your free time by planning'
            !!}</p>
        <div class="jumbotron__button">
            <button type="button" class="btn primary__button" style="text-transform: capitalize;">
                {!!$landingButtonText1 ? $landingButtonText1->value : 'start a journey' !!}
            </button>
            <button type="button" class="btn secondary__button">
                <a href="./pages/courses/short-course.html" class="text-white text-decoration-none">Program Study</a>
            </button>
        </div>
    </div>
</div>

<!-- Courses -->
<section id="interProgram" class="p-2" style="background-color: white;
    z-index: 2;
    position: relative;
    margin-top: -2rem;
    left: 0;
    width: 100vw;">
    <div class="interProgram__header">
        <h2>International Programs</h2>
        <h4>COURSES</h4>
    </div>
    <div class="interProgram__context">
        <div class="container-fluid">
            <div class="row row-cols-lg-4 row-cols-1 row-cols-md-3 justify-content-center">
                <!-- forloop di BE --> 
                @forelse ($courses as $course)
                <div class="col">
                    <a href="{{ route('scourse.detail', $course->slug) }}">
                        <div class="card">
                            <img src="{{Storage::url($course->courseDetail->thumbnail)}}" class="card-img-top"
                                alt="{{$course->slug}}" />
                            <div class="card-body">
                                <h5 class="card-title">{{$course->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <p class="text-center">Course Not Available Right Now</p>
                @endforelse
                <!-- end for loop -->
            </div>
            <div class="interProgram__allCourse">
                <button class="btn primary__button">
                    <a href="{{ route('scourse.index') }}" class="text-white">All Courses</a>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- About Gunadarma -->
<section id="aboutGunadarma">
    <div class="about__header">
        <h2>Gunadarma University</h2>
        <h4>ABOUT</h4>
    </div>
    <div class="about__content">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 g-lg-0 align-items-center">
                <div class="col">
                    @php
                    if($about){
                    $abouts = json_decode($about->value);
                    }else {
                    $abouts = '';
                    }
                    @endphp
                    <p>
                        {{ $abouts ? $abouts->excerpt : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquam ad distinctio voluptatibus autem. Asperiores, dolor. Distinctio sunt repudiandae maiores facilis perspiciatis, iusto minima repellat laborum. Sapiente ullam sint placeat.
                        Libero quia recusandae asperiores. Laborum ad alias possimus explicabo eum illum fugit omnis rerum sed quasi velit aliquid ipsa provident ab delectus, culpa, libero ex, dignissimos dolorum? Incidunt, velit repellat.
                        Animi pariatur deleniti eum laboriosam, tempore omnis accusamus eius ab hic quae error natus sint repudiandae, nesciunt assumenda nisi adipisci rem commodi consequatur dignissimos atque ut! Laudantium quidem exercitationem libero!'}}
                    </p>
                    <a href="{{ route('page.about') }}">Read More...</a>
                </div>
                <div class="col">
                    <div class="about__boxImg">
                        <img src="{{ !$about || $about->thumbnail == null  ? asset('assets/images/pict.png')  :  Storage::url($about->thumbnail) }}"
                            alt="Gunadarma" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Life at gunadarma -->
<section id="lifeGunadarma">
    <div class="lifeGunadarma__header">
        <h2>Gunadarma University</h2>
        <h4>LIFE AT GUNADARMA UNIVERSITY</h4>
    </div>
    <div class="lifeGunadarma__contents">
        <div class="card">
            <div class="row row-cols-1 g-0 align-items-center">
                <div class="col-md-5">
                    <div class="lifeGunadarma__boxImg">
                        <img src="{{ !$sit ||$sit->thumbnail == null ? asset('assets/images/gunadarma-life.png') : Storage::url($sit->thumbnail ) }}"
                            alt="Basketball Park" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="lifeGunadarma__content">
                        @php
                        if($sit){
                        $sits = json_decode($sit->value);
                        }else {
                        $sits = '';
                        }
                        @endphp
                        <h2>{{ $sits ? $sits->title : 'Sport Center' }}</h2>
                        <p>
                            {{ $sits ? $sits->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                            dolor excepturi quibusdam eveniet veniam accusantium impedit
                            harum corrupti consequuntur perspiciatis repellendus velit
                            odio!' }}
                        </p>
                        <a href="{{ route('life.student') }}" class="btn primary__button">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- icon show -->
@include('icon')

<!-- Research  -->
<section id="research">
    <div class="research__header">
        <h2>Gunadarma University</h2>
        <h4>RESEARCH</h4>
    </div>
    <div class="research__contents">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                @php $i=0; @endphp
                @forelse ($rgroups as $rgroup)
                @isset($rgroup->group)
                <button class="nav-link {{$i == 0 ? 'active' : ''}}" id="{{ Str::slug($rgroup->group) }}-tab"
                    data-bs-toggle="tab" data-bs-target="#{{ Str::slug($rgroup->group) }}" type="button" role="tab"
                    aria-controls="{{ Str::slug($rgroup->group) }}" aria-selected="{{ $i == 0 ? 'true' : '' }}">
                    {{ $rgroup->group }}
                </button>
                @php $i++; @endphp
                @endisset
                @empty
                <h3>Data not found</h3>
                @endforelse
            </div>
        </nav>
        <div class="tab-content">
            @php $i=0; @endphp
            @foreach ($rgroups as $rgroup)
            @isset($rgroup->group)
            <div class="tab-pane fade {{$i == 0 ? 'show active' : ''}}" id="{{ Str::slug($rgroup->group) }}"
                role="tabpanel" aria-labelledby="{{ Str::slug($rgroup->group) }}-tab">
                <div class="container-fluid">
                    @php $i = 0; @endphp
                    @foreach($researchs as $research)
                    @if($i<=3 && $rgroup->group == $research->group)
                        <div class="card">
                            <div class="row row-cols-md-2 align-items-center">
                                @if($i%2==0)
                                <div class="col-md-5">
                                    <div class="research__boxImg">
                                        <img src="{{Storage::url($research->articleDetail->thumbnail)}}" />
                                    </div>
                                </div>
                                @else
                                <div class="col-md-7">
                                    <div class="research__content">
                                        <h3>
                                            {{$research->articleDetail->title}}
                                        </h3>
                                        <p>
                                            {{$research->articleDetail->excerpt}}
                                        </p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                                @endif
                                @if($i%2!=0)
                                <div class="col-md-5">
                                    <div class="research__boxImg">
                                        <img src="{{Storage::url($research->articleDetail->thumbnail)}}" />
                                    </div>
                                </div>
                                @else
                                <div class="col-md-7">
                                    <div class="research__content">
                                        <h3>
                                            {{$research->articleDetail->title}}
                                        </h3>
                                        <p>
                                            {{$research->articleDetail->excerpt}}
                                        </p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                        @php $i++; @endphp
                        @endforeach
                </div>
            </div>
            @php $i++; @endphp
            @endisset
            @endforeach
        </div>
    </div>
</section>

<!-- Gunadarma Graduates -->
<section id="gundarGraduates">
    <div class="gundarGraduates__header">
        <h2>Gunadarma University</h2>
        <h4>OUR PROUD GRADUATES</h4>
    </div>

    <div class="gundarGraduates__contents">
        <div class="gundarGraduates__slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($testimonies as $testimony)
                    <div class="swiper-slide">
                        <div class="card" style='width: 350px;'>
                            <div class="card__boxImg">
                                <img
                                    src="{{Storage::url($testimony->thumbnail ?? $testimony->user->userDetail->avatar)}}" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$testimony->name ?? $testimony->user->name}}</h5>
                                <p class="card-text">{{$testimony->review}}</p>
                                <hr />
                                <p class="card__course" style='text-transform:uppercase'>
                                    {{$testimony->predicate ?? $testimony->course->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="gundarGraduates__join">
            <div class="join__container">
                <div class="join__background">
                    <img src="./assets/images/Group 4149.png" />
                </div>
                <div class="container">
                    <div class="row justify-content-around align-items-center">
                        <div class="col-md-8 col-12">
                            <p>Ready for a simple future?</p>
                            <p>Start a journey!</p>
                        </div>
                        <div class="col-md-3 col-12">
                            <button class="btn primary__button">Start a Journey</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contac
t gunadarma -->
@include('include.contact')
</div>




@endsection