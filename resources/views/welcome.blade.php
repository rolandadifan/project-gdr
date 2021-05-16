@extends('layouts.landing')
@section('content')
<!-- jumbotron -->
<div class="jumbotron">
    <div class="jumbotron__overlay"></div>
    <div class="jumbotron__background">
        <img src="{{Storage::url($landingBgSection1->thumbnail)}}" alt="Jumbotron" />
    </div>
    <div class="jumbotron__content">
        <h2>{!!$landingTitle->value!!}</h2>
        <p>{!!$landingExcerpt->value!!}</p>
        <div class="jumbotron__button">
            <button type="button" class="btn primary__button" style="text-transform: capitalize;">
                {!!$landingButtonText1->value!!}
            </button>
            <button type="button" class="btn secondary__button">
                <a href="./pages/courses/short-course.html" class="text-white text-decoration-none">Program Study</a>
            </button>
        </div>
    </div>
</div>

<!-- Courses -->
<section id="interProgram" class="p-2">
    <div class="interProgram__header">
        <h2>International Programs</h2>
        <h4>COURSES</h4>
    </div>
    <div class="interProgram__context">
        <div class="container-fluid">
            <div class="row row-cols-lg-4 row-cols-1 row-cols-md-3 justify-content-center">
                <!-- forloop di BE -->
                @foreach ($courses as $course)
                <div class="col">
                    <a href="#">
                        <div class="card">
                            <img src="{{Storage::url($course->courseDetail->thumbnail)}}" class="card-img-top"
                                alt="{{$course->slug}}" />
                            <div class="card-body">
                                <h5 class="card-title">{{$course->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="col">
                    <a href="#">
                        <div class="card">
                            <img src="{{Storage::url($shortCourse->courseDetail->thumbnail)}}" class="card-img-top"
                                alt="{{$shortCourse->slug}}" />
                            <div class="card-body">
                                <h5 class="card-title">{{$shortCourse->name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end for loop -->
            </div>
            <div class="interProgram__allCourse">
                <button class="btn primary__button">
                    <a href="./pages/courses/short-course.html" class="text-white">All Courses</a>
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
                    <p>
                        {{$about->value}}
                    </p>
                    <a href="#">Read More...</a>
                </div>
                <div class="col">
                    <div class="about__boxImg">
                        <img src="{{Storage::url($about->thumbnail)}}" alt="{{$about->key}}" />
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
                        <img src="./assets/images/gunadarma-life.png" alt="Basketball Park" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="lifeGunadarma__content">
                        <h2>Sport Center</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                            dolor excepturi quibusdam eveniet veniam accusantium impedit
                            harum corrupti consequuntur perspiciatis repellendus velit
                            odio!
                        </p>
                        <a href="#" class="btn primary__button">See More</a>
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
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card__boxImg">
                                <img src="./assets/images/Mask Group 10.png" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kim Taehyun</h5>
                                <p class="card-text">
                                    "It was glorious and i could Not stop to say who for Every
                                    single moment, Thank you"
                                </p>
                                <hr />
                                <p class="card__course">COMMUNICATIONS</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card__boxImg">
                                <img src="./assets/images/Mask Group 10.png" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Kim Namjoon</h5>
                                <p class="card-text">
                                    "It was glorious and i could Not stop to say who for Every
                                    single moment, Thank you"
                                </p>
                                <hr />
                                <p class="card__course">COMPUTER SCIENCE</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card__boxImg">
                                <img src="./assets/images/Mask Group 10.png" />
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Fernando</h5>
                                <p class="card-text">
                                    "It was glorious and i could Not stop to say who for Every
                                    single moment, Thank you"
                                </p>
                                <hr />
                                <p class="card__course">INDUSTRIAL ENGINEERING</p>
                            </div>
                        </div>
                    </div>
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

<!-- contact gunadarma -->
@include('include.contact')
</div>


@endsection