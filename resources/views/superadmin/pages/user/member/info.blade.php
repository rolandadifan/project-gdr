@extends('superadmin.layouts.admin')
@section('content')

  <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
          <h1 class="my-3">Profile {{ $user->name }}</h1>
          <form action="{{ route('user.update', $user->id) }}" method="POST" class="profile-data" enctype="multipart/form-data">
            @csrf
            @method('put')
               <div class="row d-flex">
               <div class="">
                   <div class="image-profile">
                       <div class="d-flex flex-column">
                           @isset($user->userDetail->avatar)
                           <img src="{{ Storage::url($user->userDetail->avatar)}}" width="200" class="rounded ml-3" alt="profile">
                           @else
                           <img src="{{ asset('assets/images/avatar-default.png') }}" width="200" class="rounded ml-3" alt="profile">
                           @endisset
                       </div>
                   </div>
               </div>
               <div class="mr-1 ml-3">
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" class="form-control profile-input" name="name" id="" value="{{ $user->name }}">
                   </div>
                   <div class="form-group">
                       <label for="name">Email</label>
                       <input type="email" class="form-control profile-input" name="email" id="" value="{{ $user->email }}" disabled>
                   </div>
                   <div class="form-group">
                       <label for="name">No.Hp</label>
                       <input type="text" class="form-control profile-input" name="telephone" maxlength="11" id="" value="{{ $user->telephone }}">
                   </div>
                   <div class="form-group">
                       <label for="name">Address</label>
                       <textarea type="text" class="form-control profile-input" name="address" id="">{{ $user->userDetail ? $user->userDetail->address : ''  }}</textarea>
                   </div>
               </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-md btn-success btn-block px-5">Save</button>
            </div>
            </form>
      </div>
    </div>
    <!-- /.container-fluid -->
   
@endsection

