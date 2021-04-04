@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="my-3">Short Course Create</h1>
        @include('flashmessage.validation')
          @include('flashmessage.flash')
        <form action="{{ route('short.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Name Course<span style="color: red">*</span></label>
              <input type="text" class="form-control" name="courseName" required>
          </div>
          <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                <label for="name">Start Duration<span style="color: red">*</span></label>
                <input type="date" class="form-control" name="startPeriode" required>  
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="name">End Duration<span style="color: red">*</span></label>
                  <input type="date" class="form-control" name="endPeriode" required>
              </div>
            </div>
          </div>
          <div class="form-group">
              <label for="name">Information<span style="color: red">*</span></label>
              <textarea type="text" class="form-control" name="information" required></textarea>
          </div>
          <div class="form-group">
              <label for="name">Thumbnail<span style="color: red">*</span></label>
              <input type="file" accept="image/*" class="form-control" name="thumbnail" required>
              <span>max file 300kb</span>
          </div>

          <h3 class="mt-2">Detail</h3>
          <span>max detail 4</span>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Title</label>
                  <input type="text" class="form-control" name="title[]">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Detail</label>
                  <textarea type="text" class="form-control" name="info[]"> </textarea>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Title</label>
                  <input type="text" class="form-control" name="title[]">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Detail</label>
                  <textarea type="text" class="form-control" name="info[]"> </textarea>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Title</label>
                  <input type="text" class="form-control" name="title[]">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Detail</label>
                  <textarea type="text" class="form-control" name="info[]"> </textarea>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Title</label>
                  <input type="text" class="form-control" name="title[]">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Detail</label>
                  <textarea type="text" class="form-control" name="info[]"> </textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-md btn-success btn-block">Save</button>
        </form>
      </div>

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')

@endpush