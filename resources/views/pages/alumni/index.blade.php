@extends('layouts.app-2')
@section('content')
@section('breadcrumb-title', 'Alumni')
@section('title-jumbotron', 'Alumni')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="alumni" class="p-2">
                <div class="alumni__header">
                    <h2>International Programs</h2>
                    <h4>TOP 3 BEST ALUMNI</h4>
                </div>
                <div class="alumni__mainContext">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor repellat labore pariatur
                        excepturi cupiditate sapiente non neque quisquam consectetur. Eaque delectus voluptatem quas ad
                        dignissimos iusto sunt magni eum hic.
                    </p>
                </div>
                <div class="alumni__carouselContext mb-5">
                    <div class="container">
                        <div class="swiper-container swiperAlumni">
                            <div class="swiper-wrapper">
                                @forelse ($top as $tp)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row align-items-center justify-content-center gy-4 justify-content-center">
                                            <div class="col-md-4 col-12">
                                                <div class="alumni__boxImg">
                                                     @if ($tp->thumbnail == null)
                                                        <img src="{{ asset('assets/images/avatar-default.png') }}" alt="">
                                                    @else
                                                        <img src="{{ Storage::url($tp->thumbnail) }}" />
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-12">
                                                <div class="alumni__profileContent text-left">
                                                    <div class="alumni__quotes">
                                                        <p>
                                                            <q>{{$tp->review}}</q>
                                                        </p>
                                                    </div>
                                                    <div class="alumni__profile">
                                                        <h5>{{ $tp->user->name ?? 'no name' }}</h5>
                                                        <h6>{{ $tp->course->name ?? 'no course' }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row align-items-center justify-content-center gy-4 justify-content-center">
                                            <div class="col-md-4 col-12">
                                                <div class="alumni__boxImg">
                                                        <img src="{{ asset('assets/images/avatar-default.png') }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-12">
                                                <div class="alumni__profileContent text-left">
                                                    <div class="alumni__quotes">
                                                        <p>
                                                            <q>no data</q>
                                                        </p>
                                                    </div>
                                                    <div class="alumni__profile">
                                                        <h5>no data</h5>
                                                        <h6>no data</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="thumbnailGundar">
            <div class="row row-cols-1 row-cols-md-2 gy-3 align-items-center">
                <div class="col thumbnailGundar-left">
                    <div class="thumbnailGundarWord">
                        <h5>Ready for a simple future? <span>Start a journey</span></h5>
                    </div>
                    <div class="thumbnailGundarBtn">
                        <a href="#" class="btn">Start a Journey</a>
                    </div>
                </div>
                <div class="col thumbnailGundar-right">
                    <div class="thumbnailGundar__imgBx">
                        <img src="{{ asset('assets/images/thumbnail-alumni-logo.png') }}" alt="alumni logo">
                    </div>
                </div>
            </div>
        </div>


        <div class="alumni__testimonial">
            <div class="alumni__testimonialHeader">
                <h2>Gunadarma University</h2>
                <h4>TESTIMONIAL OF ALUMNI</h4>
            </div>
        
            <div class="alumni__testimonialContents">
                <div class="alumni__testimonialSlider">
                    <div class="swiper-container swiperTestimonial">
                    <div class="swiper-wrapper">
                        @forelse ($testimonies as $alumni)
                        <div class="swiper-slide">
                        <div class="card">
                            <div class="card__boxImg">
                                @if ($alumni->thumbnail == null)
                                    <img src="{{ asset('assets/images/avatar-default.png') }}" alt="">
                                @else
                                    <img src="{{ Storage::url($alumni->thumbnail) }}" />
                                @endif
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">{{ $alumni->user->name ?? 'no name' }}</h5>
                            <p class="card-text">
                                "{{ $alumni->review ?? 'aaaaaaaaaaaaaa' }}"
                            </p>
                            <hr />
                            <p class="card__course">{{ $alumni->course->name ?? 'no course' }}</p>
                            </div>
                        </div>
                        </div>
                        @empty
                             <div class="swiper-slide">
                        <div class="card">
                            <div class="card__boxImg">
                            <img src="./../../assets/images/Mask Group 10.png" />
                            </div>
                            <div class="card-body">
                            <h5 class="card-title">No Data</h5>
                            <p class="card-text">
                                "No data"
                            </p>
                            <hr />
                            <p class="card__course">No data</p>
                            </div>
                        </div>
                        </div>
                        @endforelse

                    </div>
        
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
@push('addon-script')
@endpush
