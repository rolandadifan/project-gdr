@extends('superadmin.layouts.admin')
@section('content')

  <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
          <h1 class="my-3">Profile Admin</h1>
          @include('flashmessage.validation')
            @include('flashmessage.flash')
          <form action="{{ route('profile.admin.update') }}" method="POST" class="profile-data" enctype="multipart/form-data">
            @csrf
            @method('put')
               <div class="row d-flex">
               <div class="">
                   <div class="image-profile">
                       <div class="d-flex flex-column">
                           @if (!$users || $users->avatar == null )
                            <img src="{{ asset('assets/images/avatar-default.png') }}" width="200" class="rounded ml-3" alt="profile">
                           @else
                            <img src="{{ Storage::url($users->avatar)}}" width="200" class="rounded ml-3" alt="profile">
                           @endif
                           <input type="file" name="avatar" accept=".png, .jpg, .jpeg" class="my-3 ml-3">
                       </div>
                   </div>
               </div>
               <div class="mr-1">
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" class="form-control profile-input" name="name" id="" value="{{ Auth()->user()->name }}">
                   </div>
                   <div class="form-group">
                       <label for="name">Email</label>
                       <input type="email" class="form-control profile-input" name="email" id="" value="{{ Auth()->user()->email }}">
                   </div>
                   <div class="form-group">
                       <label for="name">No.Hp</label>
                       <input type="text" class="form-control profile-input" name="telephone" id="" value="{{ Auth()->user()->telephone }}">
                   </div>
                   <div class="form-group">
                       <label for="name">Address</label>
                       <textarea type="text" class="form-control profile-input" name="address" id="">{{ Auth()->user()->userDetail->address }}</textarea>
                   </div>
                   <div class="form-group">
                       <label for="name">Password</label>
                       <input type="password" class="form-control profile-input" name="password" id="">
                   </div>
                   <div class="form-group">
                       <label for="name">Confirm Password</label>
                       <input type="password" class="form-control profile-input" name="password_confirmation" id="">
                   </div>
               </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-md btn-success px-5">Save</button>
            </div>
            </form>
      </div>
    </div>
    <!-- /.container-fluid -->
   
@endsection

