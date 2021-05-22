@extends('layouts.location-layout')
@section('content')
@section('breadcrumb-title', 'Location')
@section('title-jumbotron', 'Location')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
@include('icon')
    <main>
        <div class="container-fluid">
            <div id="location" class="p-2">
                <div class="location__header">
                    <h2>International Programs</h2>
                    <h4>Location</h4>
                </div>
                <div class="location__mainContext">
                    <h3 class="text__header mb-3">Campus Location</h3>
                    
                    <div class="row row-cols-1 row-cols-md-2 align-items-start">
                        <div class="col">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="jakarta-tab" data-bs-toggle="tab" data-bs-target="#jakarta" type="button" role="tab" aria-controls="jakarta" aria-selected="true">Jakarta</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="depok-tab" data-bs-toggle="tab" data-bs-target="#depok" type="button" role="tab" aria-controls="depok" aria-selected="false">Depok</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="bekasi-tab" data-bs-toggle="tab" data-bs-target="#bekasi" type="button" role="tab" aria-controls="bekasi" aria-selected="false">Bekasi</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tangerang-tab" data-bs-toggle="tab" data-bs-target="#tangerang" type="button" role="tab" aria-controls="tangerang" aria-selected="false">Tangerang</button>
                            </li>
                        </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="jakarta" role="tabpanel" aria-labelledby="home-tab">
                                    @include('pages.locations.city.jakarta', ['jakarta' => $jakarta])
                                </div>
                                <div class="tab-pane fade" id="depok" role="tabpanel" aria-labelledby="depok-tab">
                                     @include('pages.locations.city.depok', ['depok' => $depok])
                                </div>
                                <div class="tab-pane fade" id="bekasi" role="tabpanel" aria-labelledby="bekasi-tab">
                                     @include('pages.locations.city.bekasi', ['bekasi' => $bekasi])
                                </div>
                                <div class="tab-pane fade" id="tangerang" role="tabpanel" aria-labelledby="tangerang-tab">
                                     @include('pages.locations.city.tangerang', ['tangerangs' => $tangerangs])
                                </div>
                            </div>                 
                        </div>
                        <div class="col">
                            <div class="card location__link-contact px-5 py-3">
                                <div class="image__box">
                                    <img src="{{ asset('assets/images/gundar-new-logo.png') }}" alt="">
                                </div>
                                <div class="link mx-auto">
                                    <h5>Link</h5>
                                    <div class="link__content">
                                        <ul>
                                            <li>
                                                <a href="http://staffsite.gunadarma.ac.id/" target="_blank">Staffsite</a>
                                            </li>
                                            <li>
                                                <a href="https://studentsite.gunadarma.ac.id/" target="_blank">Studensite</a>
                                            </li>
                                            <li>
                                                <a href="http://career.gunadarma.ac.id/" target="_blank">CareerCenter</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Library
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="email__gundar mx-auto">
                                    <div class="email__boxImg">
                                        <img src="{{ asset('assets/images/icons/email.png') }}" alt="">
                                    </div>
                                    <div class="email__content">
                                        <h5>Email</h5>
                                        <p>@Gunadarma.ac.id</p>
                                    </div>
                                </div>
                                <div class="telephone__gundar mx-auto">
                                    <div class="telephone__boxImg">
                                        <img src="{{ asset('assets/images/icons/phone-call.png') }}" alt="Telephone">
                                    </div>
                                    <div class="telephone__content">
                                        <h5>Telephone</h5>
                                        <p>123456789</p>
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
@push('addon-script')

<script>
  
</script>
@endpush
