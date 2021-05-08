@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'News')
@section('title-jumbotron', 'News')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
    <div class="container-fluid">
        <div id="news" class="p-2">
            <div class="news__header">
                <h2>International Programs</h2>
                <h4>News</h4>
            </div>
            <div class="news__body">
                <div class="container">
                    <!-- looping for more news -->
                    <!-- Swiper -->
                    <div class="swiper-container" id="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row contentNews">
                                    <div class="col">
                                        <div class="newsContent__boxImage">
                                            <img src="./../../assets/images/imageNews.png" alt="">
                                        </div>
                                        <div class="newsContent__body">
                                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae sunt maxime ex id voluptas repellat porro eaque, atque aspernatur voluptatem, non earum. Consequatur perspiciatis cumque quis repellat, vel odio. Fuga.</p>

                                            <a href="#">Read more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row contentNews">
                                <div class="col">
                                    <div class="newsContent__boxImage">
                                        <img src="./../../assets/images/imageNews.png" alt="">
                                    </div>
                                    <div class="newsContent__body">
                                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae sunt maxime ex id voluptas repellat porro eaque, atque aspernatur voluptatem, non earum. Consequatur perspiciatis cumque quis repellat, vel odio. Fuga.</p>

                                        <a href="#">Read more...</a>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- end looping -->
                    </div>
                </div>
            </div>
        </div>
        <!-- berita lainnya -->
    <main class="beritaLainnya">
        <div class="container">
            <div class="beritaLainnya__header">
                <h5>Berita Lainnya</h5>
            </div>
            <div class="container-fluid beritaLainnya__body">
                <div class="card">
                    <div class="row row-cols-md-2 align-items-center">
                    <div class="col-md-5">
                        <div class="beritaLainnya__boxImg">
                        <img src="./../../assets/images/Mask Group 10.png" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="beritaLainnya__content">
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
                <div class="card">
                    <div class="row row-cols-md-2 align-items-center">
                    <div class="col-md-5">
                        <div class="beritaLainnya__boxImg">
                        <img src="./../../assets/images/Mask Group 11.png" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="beritaLainnya__content">
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
                <div class="card">
                    <div class="row row-cols-md-2 align-items-center">
                    <div class="col-md-5">
                        <div class="beritaLainnya__boxImg">
                        <img src="./../../assets/images/Mask Group 11.png" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="beritaLainnya__content">
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
    </main>

     <!-- latest event -->
     <div class="container-fluid my-5 latestNews p-4">
        <div class="latestNews__header mb-3">
            <h4>Latest Event</h4>
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
    </main>

@endsection
