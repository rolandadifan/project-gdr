@extends('layouts.auth')
@section('title', 'Login')
@section('content')
<main class="registrasi">
    <div class="container-fluid">
        <div class="row row-cols-md-2 row-cols-1 align-items-center">
            <div class="col registrasi__form p-5">
                <div class="registrasi__formBox">
                    <div class="registrasi__formHeader">
                        <h5>Sign In..</h5>
                        <p>Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                    </div>
                    <div class="registrasi__formContent">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password">
                                    <i class="far fa-eye input-group-text align-middle" id="togglePassword"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="group__form d-flex justify-content-between mb-3 align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="rememberMe">
                                        Remember Me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="forgot__password">Forgot your password?</a>
                                @endif
                            </div>
                            <div class="row row-cols-1 gy-3 justify-content-around align-items-center text-center button__group">
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-warning text-white rounded w-75 text-center">Sign In</button>
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
                            <button class="btn btn-primary rounded-end px-4">Sign Up with Google</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col registrasi__gambar p-3">
                <div class="registrasi__gambarBox">
                    <div class="registrasi__gambarBox--content">
                        <div class="registrasi__gambarBox--contentIllustration">
                            <img src="{{ asset('assets/images/Illustration_Register.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection