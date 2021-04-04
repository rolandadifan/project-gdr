@extends('layouts.app')
@section('content')
@include('include.jumbotron')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="howToApply" class="p-2">
                <div class="howToApply__header">
                    <h2>International Programs</h2>
                    <h4>How To Apply</h4>
                </div>
                <div class="howToApply__subHeader">
                    <h5>Learning at Deakin through COVID-19</h5>
                    <p>While most courses are currently being taught online due to COVID-19, if you ultimately want to
                        study on campus, please apply
                        for your preferred campus. This will enable you to start studying online and then transition to
                        on-campus study when feasible.
                        However, if you want to study online for the entire duration of your course, select Cloud Campus
                        as your campus when applying.</p>

                    <h5>What are you applying for?</h5>
                    <p>Choose your study type to find out how to apply for your course. If you’re unsure which study
                        type is right for you, we can help
                        you find out:</p>
                </div>
                <div class="howToApply__context">
                    <div class="container-fluid">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="single-tab" data-bs-toggle="tab"
                                    data-bs-target="#single" type="button" role="tab" aria-controls="single"
                                    aria-selected="true">
                                    Single unit applications
                                </button>
                                <button class="nav-link" id="undergraduate-tab" data-bs-toggle="tab"
                                    data-bs-target="#undergraduate" type="button" role="tab"
                                    aria-controls="undergraduate" aria-selected="false">
                                    Undergraduate degree applications
                                </button>
                                <button class="nav-link" id="postgraduate-tab" data-bs-toggle="tab"
                                    data-bs-target="#postgraduate" type="button" role="tab" aria-controls="postgraduate"
                                    aria-selected="false">
                                    Postgraduate degree applications
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="single" role="tabpanel"
                                aria-labelledby="single-tab">
                                <div class="card bg-light p-5 text-justify">
                                    <div class="card__content">
                                        <div class="row">
                                            <div class="col">
                                                <h6>Using a single unit as a pathway to a course</h6>
                                                <p>If you complete a non-award unit successfully, it may be counted as
                                                    credit towards a degree course at Deakin.
                                                    If you enjoy your single-unit study experience at Deakin and decide
                                                    to apply for an award course, submit a course
                                                    application and include your completed unit on a recognition of
                                                    prior learning application.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>How to apply</h6>
                                                <p>To apply for single-unit/non-award study, submit your application
                                                    online via the Deakin Course and Scholarship
                                                    applicant portal. Apply for multiple units in one trimester in a
                                                    single application if you like and you’ll be notified
                                                    of the outcome by email. To study units in a subsequent trimester,
                                                    you’ll have to submit another online application.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Application dates</h6>
                                                <p>Applications for Trimester 1 close 28 February 2021.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Fees</h6>
                                                <p>Deakin charges fees for single-unit/non-award enrolments as they
                                                    aren’t Commonwealth supported places. The
                                                    cost of each unit depends on the government-classified area of study
                                                    to which the unit belongs. To find information
                                                    about specific unit fees check our non-award information for
                                                    domestic and international students.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Rights and responsibilities</h6>
                                                <p>Just like a degree student, you’ll be expected to complete all
                                                    administrative, academic and examination
                                                    requirements to get formal recognition that you’ve completed the
                                                    unit properly. Once enrolled, you’ll have the
                                                    same rights and responsibilities as other Deakin students.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Computing requirements</h6>
                                                <p>At Deakin, we make extensive use of technology in our teaching. To
                                                    study at Deakin you are required to have:
                                                </p>
                                                <ol>
                                                    <li>access to a device such as a desktop computer or laptop
                                                    </li>
                                                    <li>connectivity to the internet</li>
                                                    <li>capability to use Deakin’s online learning environments.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="undergraduate" role="tabpanel"
                                aria-labelledby="undergraduate-tab">
                                <div class="card bg-light p-5 text-justify">
                                    <div class="card__content">
                                        <div class="row">
                                            <div class="col">
                                                <h6>Using a single unit as a pathway to a course</h6>
                                                <p>If you complete a non-award unit successfully, it may be counted as
                                                    credit towards a degree course at Deakin.
                                                    If you enjoy your single-unit study experience at Deakin and decide
                                                    to apply for an award course, submit a course
                                                    application and include your completed unit on a recognition of
                                                    prior learning application.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>How to apply</h6>
                                                <p>To apply for single-unit/non-award study, submit your application
                                                    online via the Deakin Course and Scholarship
                                                    applicant portal. Apply for multiple units in one trimester in a
                                                    single application if you like and you’ll be notified
                                                    of the outcome by email. To study units in a subsequent trimester,
                                                    you’ll have to submit another online application.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Application dates</h6>
                                                <p>Applications for Trimester 1 close 28 February 2021.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Fees</h6>
                                                <p>Deakin charges fees for single-unit/non-award enrolments as they
                                                    aren’t Commonwealth supported places. The
                                                    cost of each unit depends on the government-classified area of study
                                                    to which the unit belongs. To find information
                                                    about specific unit fees check our non-award information for
                                                    domestic and international students.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Rights and responsibilities</h6>
                                                <p>Just like a degree student, you’ll be expected to complete all
                                                    administrative, academic and examination
                                                    requirements to get formal recognition that you’ve completed the
                                                    unit properly. Once enrolled, you’ll have the
                                                    same rights and responsibilities as other Deakin students.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Computing requirements</h6>
                                                <p>At Deakin, we make extensive use of technology in our teaching. To
                                                    study at Deakin you are required to have:
                                                </p>
                                                <ol>
                                                    <li>access to a device such as a desktop computer or laptop
                                                    </li>
                                                    <li>connectivity to the internet</li>
                                                    <li>capability to use Deakin’s online learning environments.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="postgraduate" role="tabpanel"
                                aria-labelledby="postgraduate-tab">
                                <div class="card bg-light p-5 text-justify">
                                    <div class="card__content">
                                        <div class="row">
                                            <div class="col">
                                                <h6>Using a single unit as a pathway to a course</h6>
                                                <p>If you complete a non-award unit successfully, it may be counted as
                                                    credit towards a degree course at Deakin.
                                                    If you enjoy your single-unit study experience at Deakin and decide
                                                    to apply for an award course, submit a course
                                                    application and include your completed unit on a recognition of
                                                    prior learning application.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>How to apply</h6>
                                                <p>To apply for single-unit/non-award study, submit your application
                                                    online via the Deakin Course and Scholarship
                                                    applicant portal. Apply for multiple units in one trimester in a
                                                    single application if you like and you’ll be notified
                                                    of the outcome by email. To study units in a subsequent trimester,
                                                    you’ll have to submit another online application.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Application dates</h6>
                                                <p>Applications for Trimester 1 close 28 February 2021.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Fees</h6>
                                                <p>Deakin charges fees for single-unit/non-award enrolments as they
                                                    aren’t Commonwealth supported places. The
                                                    cost of each unit depends on the government-classified area of study
                                                    to which the unit belongs. To find information
                                                    about specific unit fees check our non-award information for
                                                    domestic and international students.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Rights and responsibilities</h6>
                                                <p>Just like a degree student, you’ll be expected to complete all
                                                    administrative, academic and examination
                                                    requirements to get formal recognition that you’ve completed the
                                                    unit properly. Once enrolled, you’ll have the
                                                    same rights and responsibilities as other Deakin students.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <h6>Computing requirements</h6>
                                                <p>At Deakin, we make extensive use of technology in our teaching. To
                                                    study at Deakin you are required to have:
                                                </p>
                                                <ol>
                                                    <li>access to a device such as a desktop computer or laptop
                                                    </li>
                                                    <li>connectivity to the internet</li>
                                                    <li>capability to use Deakin’s online learning environments.</li>
                                                </ol>
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
    </main>
@endsection
