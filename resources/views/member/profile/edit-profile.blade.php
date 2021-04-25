@extends('layouts.landing')
@section('content')
@include('sweetalert::alert')
<div class="container edit__profile py-4">
            <h4>USER PROFILE</h4>
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row g-3">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        @if (!$user)
                                        <div id="imagePreview"
                                            style="background-image: url({{ asset('assets/images/avatar-default.png') }});">
                                        </div>
                                        @else
                                        <div id="imagePreview"
                                            style="background-image: url({{ Storage::url($user->avatar)}});">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h3>{{ Auth()->user()->name }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 profile__content">
                        <div class="card p-3">
                            <h5>Details</h5>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ Auth()->user()->name }}"
                                        name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" disabled class="form-control" id="email"
                                        placeholder="{{ Auth()->user()->email }}">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="date" class="form-label">DD/MM/YYYY</label>
                                        <input type="date" class="form-control" id="date" value="{{ !$user ? '' : $user->date_birth  }}" name="date_birth">
                                    </div>
                                    <div class="col">
                                        <label for="gender" class="form-label">Gender</label>
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" {{ ( !$user ? '' : $user->gender=="F")? "checked" : "" }} type="radio" name="gender" id="female"
                                                    value="F">
                                                <label class="form-check-label" for="female">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" {{ ( !$user ? '' : $user->gender=="M")? "checked" : "" }} type="radio" name="gender" id="male"
                                                    value="M">
                                                <label class="form-check-label" for="male">Male</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mt-2">
                    <div class="col-12 col-md-5 profile__content">
                        <div class="card p-3">
                            <h5>Change Password</h5>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPass" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPass" name="password_confirmation">
                                </div>
                                <div class="row noted">
                                    <h6>Note:</h6>
                                    <p>Must be at least 8 characters long, uppercase,
                                        lowercase, numbers, and symbol</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7 profile__content">
                        <div class="card p-3">
                            <h5>Contact</h5>
                            <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="numberPhone" class="form-label">Mobile Number</label>
                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary dropdown-toggle btn__dropdown"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.222"
                                                        height="16.188" viewBox="0 0 23.222 16.188">
                                                        <g id="indonesia" transform="translate(-12 -27.751)">
                                                            <path id="Path_1906" data-name="Path 1906"
                                                                d="M12,27.751H35.222V43.939H12Z" fill="#d60a2e" />
                                                            <path id="Path_1907" data-name="Path 1907"
                                                                d="M12,64H35.222v8.094H12Z"
                                                                transform="translate(0 -28.155)" fill="#f0f0f0" />
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
                                                <input type="tel" name="tel1" maxlength="3" minlength="3" value="+62"
                                                    size="3" disabled class="text-center" />
                                                <input type="tel" name="telephone" class="form-control" value="{{ Auth()->user()->telephone }}">
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <input type="text" class="form-control" id="nationality"
                                                placeholder="Indonesia" name="nationality" value="{{ !$user ? '' : $user->nationality }}"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <textarea class="form-control"
                                             id="address" style="height: 130px" name="address">
                                             {{ !$user ? '' : $user->address }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center text-center mt-3 btn__group">
                    <div class="d-inline-block">
                        <input type="button" class="btn btn__cancel" value="Cancel">
                        <input type="submit" class="btn btn__save" value="Save changes">
                    </div>
                </div>
            </form>
        </div>
        @include('include.contact')
    </div>
@endsection

@push('addon-script')
<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function () {
            readURL(this);
        });
    </script>
@endpush