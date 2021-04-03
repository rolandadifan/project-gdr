@extends('layouts.auth')
@section('title', 'Register')
@section('content')
<main class="login">
    <div class="container-fluid">
        <div class="row row-cols-md-2 row-cols-1 align-items-center">
            <div class="col login__gambar p-3">
                <div class="login__gambarBox">
                    <div class="login__gambarBox--content">
                        <div class="login__gambarBox--contentIllustration">
                            <img src="{{ asset('assets/images/illustration_login.png') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col login__form p-5">
                <div class="login__formBox">
                    <div class="login__formHeader">
                        <h5>Start Your Journey</h5>
                        <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                    </div>
                    <div class="login__formContent">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                            </div>
                            <div class="mb-3" id="only-number">
                                <label for="numberPhone" class="form-label">Mobile Number</label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary dropdown-toggle btn__dropdown" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.222" height="16.188"
                                            viewBox="0 0 23.222 16.188">
                                            <g id="indonesia" transform="translate(-12 -27.751)">
                                                <path id="Path_1906" data-name="Path 1906"
                                                    d="M12,27.751H35.222V43.939H12Z" fill="#d60a2e" />
                                                <path id="Path_1907" data-name="Path 1907"
                                                    d="M12,64H35.222v8.094H12Z" transform="translate(0 -28.155)"
                                                    fill="#f0f0f0" />
                                            </g>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="tel" name="tel1" maxlength="3" minlength="3" value="+62" size="3"
                                        disabled class="text-center"/>
                                    <input type="tel" name="telephone" maxlength="11" class="form-control">
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control is-invalid" id="password" name="password">
                                    <i class="far fa-eye input-group-text align-middle" id="togglePassword"></i>
                                    <div class="invalid-feedback">
                                        *Must be at least 8 characters long, uppercase, lowercase, numbers, and symbol
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-1 gy-3 justify-content-around align-items-center text-center button__group">
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-warning text-white rounded w-75 text-center">Create Account</button>
                                </div>
                        
                            </form>
                        </div>
                        <div class="col-lg-3">
                            <div class="row align-items-center">
                                <div class="col"><hr class="d-md-block d-none"></div>
                                    <div class="col"><span>OR</span></div>
                                        <div class="col"><hr class="d-md-block d-none"></div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="d-lg-flex d-inline-block w-100">
                                    <span class="icon__google bg-white border rounded-start p-1" id="addon-wrapping">
                                        <svg id="search" xmlns="http://www.w3.org/2000/svg" width="32.106" height="32.106" viewBox="0 0 32.106 32.106">
                                                <path id="Path_2010" data-name="Path 2010" d="M7.115,149,6,153.172l-4.085.086a16.081,16.081,0,0,1-.118-14.99h0l3.637.667,1.593,3.615a9.581,9.581,0,0,0,.09,6.45Z" transform="translate(0 -129.598)" fill="#fbbb00"/>
                                                <path id="Path_2011" data-name="Path 2011" d="M277.048,208.176a16.047,16.047,0,0,1-5.723,15.518h0l-4.58-.234-.648-4.047a9.568,9.568,0,0,0,4.117-4.886h-8.584v-6.351h15.42Z" transform="translate(-245.222 -195.122)" fill="#518ef8"/>
                                                <path id="Path_2012" data-name="Path 2012" d="M54.7,318.578h0a16.058,16.058,0,0,1-24.19-4.911l5.2-4.259A9.547,9.547,0,0,0,49.469,314.3Z" transform="translate(-28.596 -290.007)" fill="#28b446"/>
                                                <path id="Path_2013" data-name="Path 2013" d="M53.129,3.7l-5.2,4.258a9.546,9.546,0,0,0-14.074,5L28.625,8.67h0A16.057,16.057,0,0,1,53.129,3.7Z" transform="translate(-26.829)" fill="#f14336"/>
                                            </svg>
                                        </span>
                                        <button type="submit" class="btn btn-primary rounded-end">Sign Up with Google</button>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection