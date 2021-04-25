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
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row align-items-center justify-content-center gy-4 justify-content-center">
                                            <div class="col-md-4 col-12">
                                                <div class="alumni__boxImg">
                                                    <img src="./../../assets/images/profile-image-alumni.png">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-12">
                                                <div class="alumni__profileContent text-left">
                                                    <div class="alumni__quotes">
                                                        <p>
                                                            <q>It was glorious and I could Not stop 
                                                                to say who for Every single moment Thank you</q>
                                                        </p>
                                                    </div>
                                                    <div class="alumni__profile">
                                                        <h5>Anggie Febi Yaditha</h5>
                                                        <h6>COMMUNICATIONS</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row align-items-center justify-content-center gy-4 justify-content-center">
                                            <div class="col-md-4 col-12">
                                                <div class="alumni__boxImg">
                                                    <img src="./../../assets/images/profile-image-alumni.png">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-12">
                                                <div class="alumni__profileContent text-left">
                                                    <div class="alumni__quotes">
                                                        <p>
                                                            <q>It was glorious and I could Not stop 
                                                                to say who for Every single moment Thank you</q>
                                                        </p>
                                                    </div>
                                                    <div class="alumni__profile">
                                                        <h5>Anggie Febi Yaditha</h5>
                                                        <h6>COMMUNICATIONS</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="row align-items-center justify-content-center gy-4 justify-content-center">
                                            <div class="col-md-4 col-12">
                                                <div class="alumni__boxImg">
                                                    <img src="./../../assets/images/profile-image-alumni.png">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-12">
                                                <div class="alumni__profileContent text-left">
                                                    <div class="alumni__quotes">
                                                        <p>
                                                            <q>It was glorious and I could Not stop 
                                                                to say who for Every single moment Thank you</q>
                                                        </p>
                                                    </div>
                                                    <div class="alumni__profile">
                                                        <h5>Anggie Febi Yaditha</h5>
                                                        <h6>COMMUNICATIONS</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="alumni__thumbnail">
            <div class="row row-cols-1 row-cols-md-2 gy-3 align-items-center">
                <div class="col alumni__thumbnail-left">
                    <div class="alumni__thumbnailWord">
                        <h5>Ready for a simple future? <br> <span>Start a journey</span></h5>
                    </div>
                    <div class="alumni__thumbnailBtn">
                        <a href="#" class="btn">Start a Journey</a>
                    </div>
                </div>
                <div class="col alumni__thumbnail-right">
                    <div class="alumni__imgBx">
                        <img src="./../../assets/images/thumbnail-alumni-logo.png" alt="alumni logo">
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
                    <div class="swiper-container-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="card">
                            <div class="card__boxImg">
                            <img src="./../../assets/images/Mask Group 10.png" />
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
                            <img src="./../../assets/images/Mask Group 10.png" />
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
                            <img src="./../../assets/images/Mask Group 10.png" />
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
