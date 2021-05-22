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
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Bekasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Depok</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Jakarta</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tangerang</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="nav-tabContent">
                                <div>
                                    <div class="container-fluid">
                                        <div class="card my-3">
                                            <div class="row align-items-center p-3">
                                                <div class="col">
                                                    <h5>Campus J1</h5>
                                                    <p>(021) 88860117</p>
                                                    <p>Jl. KH. Noer Ali, RT.005/RW.006A, Jakasampurna, Kec. Bekasi Bar, Kota Bks, Jawa Barat 17145 Indonesia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-3">
                                            <div class="row align-items-center p-3">
                                                <div class="col">
                                                    <h5>Campus J2</h5>
                                                    <p>(021) 88954184</p>
                                                    <p>Jl. Cemara Raya No.57, RT.006/RW.006A, Jakasampurna Kec. Bekasi Bar., Kota Bks, Jawa Barat 17145 Indonesia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card my-3">
                                            <div class="row align-items-center p-3">
                                                <div class="col">
                                                    <h5>Campus J3</h5>
                                                    <p>(021) 88357935</p>
                                                    <p>Jalan Cempaka - Margahayu No., Jatimulya Kec. Tambun Sel., Bekasi, Jawa Barat 17510 Indonesia. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card location__link-contact px-5 py-3">
                                <div class="image__box">
                                    <img src="./../../assets/images/gundar-new-logo.png" alt="">
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
                                        <img src="./../../../assets/images/icons/email.png" alt="">
                                    </div>
                                    <div class="email__content">
                                        <h5>Email</h5>
                                        <p>@Gunadarma.ac.id</p>
                                    </div>
                                </div>
                                <div class="telephone__gundar mx-auto">
                                    <div class="telephone__boxImg">
                                        <img src="./../../../assets/images/icons/phone-call.png" alt="Telephone">
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
