@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'How To Apply')
@section('title-jumbotron', 'How To Apply')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
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

                    <h5>Setting are you applying for?</h5>
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
                                      {!! $single ? $single->value : 'no data here' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="undergraduate" role="tabpanel"
                                aria-labelledby="undergraduate-tab">
                                <div class="card bg-light p-5 text-justify">
                                    <div class="card__content">
                                        {!! $under ? $under->value : 'no data here' !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="postgraduate" role="tabpanel"
                                aria-labelledby="postgraduate-tab">
                                <div class="card bg-light p-5 text-justify">
                                    <div class="card__content">
                                        {!! $postg ? $postg->value : 'no data here' !!}
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
