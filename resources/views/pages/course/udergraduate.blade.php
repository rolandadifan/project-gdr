@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Undergraduate Course')
@section('title-jumbotron', 'Undergraduate Course')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="postgraduateCourse" class="p-2">
                <div class="postgraduateCourse__header">
                    <h2>International Programs</h2>
                    <h4>UNDERGRADUATE COURSES</h4>
                </div>
                <div class="postgraduateCourse__context">
                    <div class="container">
                        {{-- <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="master-tab" data-bs-toggle="tab"
                                    data-bs-target="#master" type="button" role="tab" aria-controls="master"
                                    aria-selected="true">
                                    Master
                                </button>
                                <button class="nav-link" id="doctor-tab" data-bs-toggle="tab"
                                    data-bs-target="#doctor" type="button" role="tab"
                                    aria-controls="doctor" aria-selected="false">
                                    Doctor
                                </button>
                            </div>
                        </nav> --}}
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="master" role="tabpanel"
                                aria-labelledby="master-tab">
                                @php
                                    if($underG){
                                        $posts = json_decode($underG->value);
                                    }else {
                                        $posts = '';
                                    }
                                @endphp
                                <div class="card">
                                    <div class="cardBachelor__header">
                                        {!! $posts->header ?? 'ubah ini di admin site' !!}
                                    </div>
                                    <!-- accordion -->
                                    <div class="accordion__courseShow accordion__undergraduate">
                                        <div class="container">
                                            {!! $posts->content ?? 'ubah ini di admin site' !!}
                                        </div>
                                    </div>
                                    <button class="accordion__course">
                                        <i class="bi bi-caret-down-fill"></i>
                                    </button>

                                </div>
                                <!-- form search undergraduate and postgraduate -->
                                <div class="formSearch">
                                    <form  action="{{ route('course.filter-under') }}" method="GET" 
                                        class="row row-cols-lg-auto g-3 align-items-center justify-content-evenly py-5">
                                        <div class="col-12">
                                            <div class="row row-cols-lg-auto g-3 align-items-center">
                                                <div class="col-12">
                                                    <select name="name" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="null">Course</option>
                                                        @foreach ($d_name as $cn)
                                                        <option value="{{ $cn->name }}">{{ $cn->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select name="degree" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="null">Degree</option>
                                                        <option value="{{ 'master' }}">Master</option>
                                                        <option value="{{ 'doctor' }}">Doctor</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select name="campus" class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option value="null">Campus</option>
                                                        @foreach ($d_campus as $c)
                                                        <option value="{{ $c->campus }}">{{ ucfirst($c->campus) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                {{-- <div class="col-12">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div> --}}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn__submit btn-primary">Submit</button>
                                            <button type="reset" class="btn btn__reset btn-primary">reset</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- list menu form -->
                                {{-- <div class="menuSearch">
                                    <h2 class="menuSearch__title">Computer Science</h2>
                                    <div class="accordion" id="accordionExample">
                                        <!-- looping jika ada item lebih dari 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="item1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#MIS"
                                                    aria-expanded="false" aria-controls="MIS">
                                                    Management Information System
                                                </button>
                                            </h2>
                                            <div id="MIS" class="accordion-collapse collapse p-md-3"
                                                aria-labelledby="item1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row my-md-2">
                                                        <h4 class="accordionCollapse__title">Key Fact</h4>
                                                        <div class="col">
                                                            <div class="accordionCollapse__content mt-2 px-3">
                                                                <div class="row row-cols-auto">
                                                                    <div class="col-md-3">
                                                                        <h6>Duration :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>4 year full-time or part-time equivalent</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Campuses :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>Depok, Kalimalang</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Key Dates :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>Direct applications Deakin for Trimester 1
                                                                            2021
                                                                            close 21 February 2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Current Deakin Students :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>To access your official course details for
                                                                            the
                                                                            year you started your degree</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-md-2">
                                                        <h4 class="accordionCollapse__title">Course Information</h4>
                                                        <div class="col pt-2 px-4">
                                                            <p class="accordionCollapse__courseInformation">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Corporis expedita et dolor molestias adipisci animi
                                                                ratione
                                                                minus, pariatur aperiam debitis officia qui voluptates
                                                                nostrum accusamus possimus odit tenetur dolores
                                                                temporibus.
                                                                Officia incidunt delectus laboriosam necessitatibus
                                                                nisi,
                                                                rerum repellat perferendis minus quos asperiores quas.
                                                                Temporibus eligendi quas neque, id totam qui dolorem
                                                                aliquam
                                                                sequi, deleniti perspiciatis similique mollitia
                                                                voluptates
                                                                blanditiis error.
                                                                Soluta ea qui laboriosam facere sapiente? Suscipit qui
                                                                doloremque eius enim veritatis laudantium eligendi vel
                                                                cumque minus magnam, in necessitatibus, amet debitis!
                                                                Temporibus aliquid hic ad, eaque magnam soluta
                                                                praesentium?
                                                                Assumenda saepe nemo praesentium, itaque, explicabo,
                                                                sapiente hic incidunt ad laudantium neque tenetur est!
                                                                Cupiditate fugiat ab ratione cumque tempora, in porro
                                                                possimus quis ex modi omnis. Sit, ex? Nemo?
                                                                In, at soluta excepturi explicabo architecto, nam
                                                                deleniti
                                                                nisi laboriosam repellat doloribus quae. Voluptatum,
                                                                dolor
                                                                sequi! Qui voluptatum voluptate optio quam. Harum, nisi
                                                                molestiae nihil labore cupiditate sint doloremque. Unde!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3 p-md-0 my-md-2">
                                                        <h4 class="accordionCollapse__title">Tuition fee</h4>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <!-- forloop be -->
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp22.000.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp3.500.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp250.000</p>
                                                                </div>
                                                            </div>
                                                            <!-- end forloop -->
                                                        </div>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp22.000.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp3.500.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp250.000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp22.000.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp3.500.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp250.000</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="button__apply">
                                                            <button class="btn btn__primary">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#informationSystems"
                                                    aria-expanded="false" aria-controls="informationSystems">
                                                    Information Systems
                                                </button>
                                            </h2>
                                            <div id="informationSystems" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is
                                                    hidden
                                                    by default, until the collapse plugin adds the appropriate classes
                                                    that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions.
                                                    You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go
                                                    within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end list menu -->
                            </div>
                            {{-- <div class="tab-pane fade" id="doctor" role="tabpanel"
                                aria-labelledby="doctor-tab">
                                <div class="card">
                                    <div class="cardBachelor__header">
                                        <h2>DOCTOR DEGREE (INTERNATIONAL)</h2>
                                        <p>English as a medium instruction</p>
                                    </div>
                                    <div class="cardBachelor__content--1">
                                        <h4>International Bachelor Categories:</h4>
                                        <ol>
                                            <li>Single Degree, student will be awarded a degree from UL</li>
                                            <li>Double Degree, student will obtain one degree from UI and one more from
                                                partner
                                                university.</li>
                                        </ol>
                                    </div>
                                    <!-- accordion -->
                                    <div class="accordion__courseShow accordion__undergraduate">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h4>General Requirements</h4>
                                                    <ul>
                                                        <li>
                                                            High school graduated or equivalent no longer than 5 years
                                                            of
                                                            the
                                                            time registration (e.g. admission 2019 for high school
                                                            graduates
                                                            in
                                                            2019,2018,2017,2016,2015)
                                                        </li>
                                                        <li>
                                                            Foculty of Medicine applicant should be graduating from
                                                            nationally
                                                            accredited high schools/completing general certificate of
                                                            education
                                                            (A level) or graduate of Diploma Program of European
                                                            Baccalaureate
                                                            or Diploma Program of International Baccalaureate or Passing
                                                            international education qualification equivalent to any of
                                                            the
                                                            above.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <h4>Documents Required</h4>
                                                    <ol>
                                                        <li>Non Indonesian passport</li>
                                                        <li>Latest color photo (full face without
                                                            hat/glasses/accessories)
                                                        </li>
                                                        <li>High school diploma or equivalent</li>
                                                        <li>High school academic transcript or equivalent</li>
                                                        <li>English Proficiency certificate: International TOEFL
                                                            (www.ets.org)
                                                            with minimum score of 173(CBT), or 61(iBT) or IELTS
                                                            (http://ielts.org) with minimum score of 5.5 TOEFL/IELTS
                                                            score
                                                            are
                                                            valid for two years from the test date. If you have or will
                                                            have
                                                            received a degree from an institution where English is the
                                                            primary
                                                            language of instruction, you do not need to submit
                                                            TOEFL/IELTS
                                                            certificate. <br> For Faculty of Medicine applicant,
                                                            International
                                                            TOEFL score must above 80(iBT) or IELTS score must above 7.
                                                            <br>
                                                            For
                                                            Faculty of Economics and Business applicant, International
                                                            TOEFL
                                                            score must above 213(CBT), or 70 (iBT) or IELTS score must
                                                            above
                                                            6.
                                                            <br> For Faculty of Law applicant, International TOEFL score
                                                            must
                                                            above 213 (CBT), or 80(iBT) or IELTS score must above 6.
                                                        </li>
                                                        <li>Faculty of Medicine and Faculty of Law applicant required to
                                                            hold
                                                            Indonesia language proficiency test (TIBA) certificate is
                                                            mandatory
                                                            document for Faculty of Medicine applicant, except those
                                                            from
                                                            high
                                                            school with entirely the class in Bahasa Indonesia </li>
                                                        <li>Motivation Statement</li>
                                                        <li>Health Certificate</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="row important__notice">
                                                <div class="col">
                                                    <h4>Important Notice:</h4>
                                                    <ul>
                                                        <li>All of the documents are submitted online on the
                                                            registration
                                                            account.</li>
                                                        <li>The faculty may apply higher specific requirements</li>
                                                        <li>Re-check your online application status to ensure all of the
                                                            form
                                                            completely filled and all of the documents successfully
                                                            submitted.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <button class="accordion__course">
                                        <i class="bi bi-caret-down-fill"></i>
                                    </button>

                                </div>
                                <!-- form search undergraduate and postgraduate -->
                                <div class="formSearch">
                                    <form
                                        class="row row-cols-lg-auto g-3 align-items-center justify-content-evenly py-5">
                                        <div class="col-12">
                                            <div class="row row-cols-lg-auto g-3 align-items-center">
                                                <div class="col-12">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example">
                                                        <option selected>Open this select menu</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn__submit btn-primary">Submit</button>
                                            <button type="reset" class="btn btn__reset btn-primary">reset</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- list menu form -->
                                <div class="menuSearch">
                                    <h2 class="menuSearch__title">Computer Science</h2>
                                    <div class="accordion" id="accordionExample">
                                        <!-- looping jika ada item lebih dari 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="item1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#MIS"
                                                    aria-expanded="false" aria-controls="MIS">
                                                    Management Information System
                                                </button>
                                            </h2>
                                            <div id="MIS" class="accordion-collapse collapse p-md-3"
                                                aria-labelledby="item1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row my-md-2">
                                                        <h4 class="accordionCollapse__title">Key Fact</h4>
                                                        <div class="col">
                                                            <div class="accordionCollapse__content mt-2 px-3">
                                                                <div class="row row-cols-auto">
                                                                    <div class="col-md-3">
                                                                        <h6>Duration :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>4 year full-time or part-time equivalent</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Campuses :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>Depok, Kalimalang</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Key Dates :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>Direct applications Deakin for Trimester 1
                                                                            2021
                                                                            close 21 February 2021</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Current Deakin Students :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>To access your official course details for
                                                                            the
                                                                            year you started your degree</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-md-2">
                                                        <h4 class="accordionCollapse__title">Course Information</h4>
                                                        <div class="col pt-2 px-4">
                                                            <p class="accordionCollapse__courseInformation">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Corporis expedita et dolor molestias adipisci animi
                                                                ratione
                                                                minus, pariatur aperiam debitis officia qui voluptates
                                                                nostrum accusamus possimus odit tenetur dolores
                                                                temporibus.
                                                                Officia incidunt delectus laboriosam necessitatibus
                                                                nisi,
                                                                rerum repellat perferendis minus quos asperiores quas.
                                                                Temporibus eligendi quas neque, id totam qui dolorem
                                                                aliquam
                                                                sequi, deleniti perspiciatis similique mollitia
                                                                voluptates
                                                                blanditiis error.
                                                                Soluta ea qui laboriosam facere sapiente? Suscipit qui
                                                                doloremque eius enim veritatis laudantium eligendi vel
                                                                cumque minus magnam, in necessitatibus, amet debitis!
                                                                Temporibus aliquid hic ad, eaque magnam soluta
                                                                praesentium?
                                                                Assumenda saepe nemo praesentium, itaque, explicabo,
                                                                sapiente hic incidunt ad laudantium neque tenetur est!
                                                                Cupiditate fugiat ab ratione cumque tempora, in porro
                                                                possimus quis ex modi omnis. Sit, ex? Nemo?
                                                                In, at soluta excepturi explicabo architecto, nam
                                                                deleniti
                                                                nisi laboriosam repellat doloribus quae. Voluptatum,
                                                                dolor
                                                                sequi! Qui voluptatum voluptate optio quam. Harum, nisi
                                                                molestiae nihil labore cupiditate sint doloremque. Unde!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3 p-md-0 my-md-2">
                                                        <h4 class="accordionCollapse__title">Tuition fee</h4>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <!-- forloop be -->
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp22.000.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp3.500.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp250.000</p>
                                                                </div>
                                                            </div>
                                                            <!-- end forloop -->
                                                        </div>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp22.000.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp3.500.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp250.000</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp22.000.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp3.500.000</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp250.000</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="button__apply">
                                                            <button class="btn btn__primary">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#informationSystems"
                                                    aria-expanded="false" aria-controls="informationSystems">
                                                    Information Systems
                                                </button>
                                            </h2>
                                            <div id="informationSystems" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is
                                                    hidden
                                                    by default, until the collapse plugin adds the appropriate classes
                                                    that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions.
                                                    You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go
                                                    within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end list menu -->
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
