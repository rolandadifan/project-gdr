@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Scholarships')
@section('title-jumbotron', 'Scholarships')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="listScholarship" class="p-2">
                <div class="listScholarship__header">
                    <h2>International Programs</h2>
                    <h4>SCHOLARSHIPS</h4>
                </div>
                <div class="listScholarship__subHeader">
                    <h5>Which scholarship is for me?</h5>
                    <p>Find a scholarship that works for you. Whether it’s recognition of your academic achievements or a   chance to make university a reality, there’s a Deakin scholarship that can help you on your way to your dream degree.</p>
                    <p class="mt-3">Check through the options to find a scholarship for you.</p>
                </div>
                <div class="listScholarship__context">
                    <div class="container-fluid">
                        <div class="row rows-cols-md-3 rows-cols-sm-2 rows-cols-1 g-3 justify-content-center align-items-center">
                            <div class="col">
                                <div class="card">
                                    <img src="./../../assets/images/list-scholarship.png" class="card-img-top p-2 rounded" alt="scholarship">
                                    <div class="card-body">
                                      <h5 class="card-title">Gunadarma University International School 2021</h5>
                                      <div class="d-flex align-items-baseline card__calender">
                                        <i class="far fa-calendar-alt"></i>
                                        <p class="px-2">Tuesday, March 8th, 2021</p>
                                      </div>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="{{ route('scholarship.detail') }}" class="scholarship__readMore">Read more..</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="./../../assets/images/list-scholarship.png" class="card-img-top p-2 rounded" alt="scholarship">
                                    <div class="card-body">
                                      <h5 class="card-title">Gunadarma University International School 2021</h5>
                                      <div class="d-flex align-items-baseline card__calender">
                                        <i class="far fa-calendar-alt"></i>
                                        <p class="px-2">Tuesday, March 8th, 2021</p>
                                      </div>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="{{ route('scholarship.detail') }}" class="scholarship__readMore">Read more..</a>
                                    </div>
                                  </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <img src="./../../assets/images/list-scholarship.png" class="card-img-top p-2 rounded" alt="scholarship">
                                    <div class="card-body">
                                      <h5 class="card-title">Gunadarma University International School 2021</h5>
                                      <div class="d-flex align-items-baseline card__calender ">
                                        <i class="far fa-calendar-alt"></i>
                                        <p class="px-2">Tuesday, March 8th, 2021</p>
                                      </div>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="{{ route('scholarship.detail') }}" class="scholarship__readMore">Read more..</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- latest news -->
        <div class="container-fluid my-5 latestNews p-4">
            <div class="latestNews__header mb-3">
                <h4>Latest News</h4>
            </div>
            <div class="row rows-cols-1 rows-cols-md-2 latestNews__content">
                <div class="col">
                    <div class="latestNews__col--header">
                        <h6>COVID-19</h6>
                        <p>The Importance of Implementing Social Distancing to Prevent COVID-19</p>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod a sint nobis corrupti nesciunt, minus voluptas labore error! Autem quia rem in cumque eaque excepturi ipsum veritatis, distinctio soluta nemo!</p>

                    <a href="#">Read more..</a>
                </div>
                <div class="col">
                    <div class="latestNews__col--header">
                        <h6>University</h6>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed m. </p>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod a sint nobis corrupti nesciunt, minus voluptas labore error! Autem quia rem in cumque eaque excepturi ipsum veritatis, distinctio soluta nemo!</p>

                    <a href="#">Read more..</a>
                </div>
            </div>
        </div>
    </main>
@endsection
