@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Postgraduate Course')
@section('title-jumbotron', 'Postgraduate Course')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="postgraduateCourse" class="p-2">
                <div class="postgraduateCourse__header">
                    <h2>International Programs</h2>
                    <h4>Postgraduate Courses</h4>
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
                                    if($posG){
                                        $posts = json_decode($posG->value);
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
                                      <form  action="{{ route('course.filter-post') }}" method="GET" 
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
                                                        <option value="{{ 'bachelor' }}">Bachelor</option>
                                                        <option value="{{ 'diploma' }}">Diploma</option>
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
                                <div class="menuSearch">
                                    <h2 class="menuSearch__title">Course</h2>
                                    <div class="accordion" id="accordionExample">
                                        <!-- looping jika ada item lebih dari 1 -->
                                        @forelse ($course as $item)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="item1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#MIS"
                                                    aria-expanded="false" aria-controls="MIS">
                                                    {{ $item->name }}
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
                                                                        <p>{{ $item->courseDetail->duration }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Campuses :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>{{ $item->courseDetail->campus }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Key Dates :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>{{ $item->courseDetail->key_dates }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row row-cols-1">
                                                                    <div class="col-md-3">
                                                                        <h6>Current Deakin Students :</h6>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <p>{{ $item->courseDetail->deaken_student }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-md-2">
                                                        <h4 class="accordionCollapse__title">Course Information</h4>
                                                        <div class="col pt-2 px-4">
                                                            <p class="accordionCollapse__courseInformation">{{ $item->courseDetail->content }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-3 p-md-0 my-md-2">
                                                        <h4 class="accordionCollapse__title">Tuition fee</h4>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <!-- forloop be -->
                                                            @php
                                                                $price = [];
                                                                foreach ($item->courseDetail->prices as $priceArr) {
                                                                    $price[$priceArr->name] = $priceArr->value;
                                                                };
                                                            @endphp
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade AA</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['AA'], 2) == 0 ? '-' : number_format($price['AA'], 2) }}</p>
                                                           </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['AA_BPP'], 2) == 0 ? '-' :  number_format($price['AA_BPP'], 2) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['AA_SKS'], 2) == 0 ? '-' :  number_format($price['AA_SKS'], 2)}}</p>
                                                                </div>
                                                            </div>
                                                            <!-- end forloop -->
                                                        </div>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade A</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['A'], 2) == 0 ? '-' :  number_format($price['A'], 2) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['A_BPP'], 2) == 0 ? '-' :  number_format($price['A_BPP'], 2) }} </p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['A_SKS'], 2) == 0 ? '-' :  number_format($price['A_SKS'], 2) }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 col-md-4 px-md-4 px-2 py-md-0 py-3 tuitionFee__content">
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>Grade B</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['B'], 2) == 0 ? '-' :  number_format($price['B'], 2) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>BPP</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['B_BPP'], 2) == 0 ? '-' :  number_format($price['B_BPP'], 2) }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row rows-cols-1">
                                                                <div class="col">
                                                                    <h6>SKS</h6>
                                                                </div>
                                                                <div class="col">
                                                                    <p>Rp {{ number_format($price['B_SKS'], 2) == 0 ? '-' :  number_format($price['B_SKS'], 2) }}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="button__apply">
                                                            <a href="{{ route('enrollment.index') }}" class="btn btn__primary">Apply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#informationSystems"
                                                    aria-expanded="false" aria-controls="informationSystems">
                                                    No Data Here
                                                </button>
                                            </h2>
                                            <div id="informationSystems" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>Opss!!</strong> Looks like what your looking for is not Found
                                                </div>
                                            </div>
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                                <!-- end list menu -->
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
