@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        @include('flashmessage.flash')
        @include('flashmessage.validation')
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mt-2" style="background-color: white !important">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin Info</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }} Info</li>
          </ol>
        </nav>
        <h1 class="mt-1 mb-5">{{ $user->name }} Info</h1>
       <form action="{{ route('admin.update', $user->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
          </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" value="{{ $user->email }}" required disabled>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            {{-- <input type="text" name="address" class="form-control"  required> --}}
            <textarea name="address" class="form-control" cols="30" rows="5">{{ $user->address }}</textarea>
          </div>
        <div class="form-group">
            <label for="telephone">No Hp</label>
            <input type="number" name="telephone" class="form-control" value={{ $user->telephone }} required>
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" name="role">
              <option value="{{ $user->role }}">{{ $user->role }}</option>
              <option value="admin">Admin</option>
              <option value="sadmin">Super Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-md btn-primary">Save</button>
       </form>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  

@endsection
