@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Research')
@section('title-jumbotron', 'Research')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
 <main>
        <div class="container-fluid">
            <div id="research" class="p-2">
                <div class="research__header">
                    <h2>International Programs</h2>
                    <h4>RESEARCH</h4>
                </div>
                <div class="research__mainContext">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                        ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                    </p>
                </div>
                <div class="research__subContext mt-4">
                    <div class="container-fluid">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @forelse ($article as $item)
                                <button class="nav-link" id="research-group-tab" data-bs-toggle="tab"
                                    data-bs-target="#research-group" type="button" role="tab"
                                    aria-controls="research-group" aria-selected="true">
                                    {{ $item->group }}
                                </button>
                                @empty
                                    <h3>Data not found</h3>
                                @endforelse
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="research-group" role="tabpanel"
                                aria-labelledby="research-group-tab">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="row row-cols-md-2 align-items-center">
                                            <div class="col-md-5">
                                                <div class="research__boxImg">
                                                    <img src="./../../assets/images/Mask Group 10.png" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="research__content">
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
                                            <div class="col-md-7">
                                                <div class="research__content">
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
                                            <div class="col-md-5">
                                                <div class="research__boxImg">
                                                    <img src="./../../assets/images/Mask Group 13.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="row row-cols-md-2 align-items-center">
                                            <div class="col-md-5">
                                                <div class="research__boxImg">
                                                    <img src="./../../assets/images/Mask Group 11.png" />
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="research__content">
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
                            <div class="tab-pane fade" id="research-industry" role="tabpanel"
                                aria-labelledby="research-industry-tab">
                                Research and Industry
                            </div>
                            <div class="tab-pane fade" id="responses-covid" role="tabpanel"
                                aria-labelledby="responses-covid-tab">
                                Responses COVID-19
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
