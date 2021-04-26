@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
          <div class="row">
              <div class="col-md-9">
                  <h1 class="my-3">{{ $course->name }}</h1>
              </div>
              <div class="col-md-3 mt-6">
                @if ($course->status_id == '2')
                <form action="{{ route('course.status.active', $course->id) }}" method="POST">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn btn-md btn-warning btn-block">Make Active</button>
                </form>
                @else
                 <form action="{{ route('course.status.inactive', $course->id) }}" method="POST">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn btn-md btn-danger btn-block">Make InActive</button>
                </form>
                @endif
              </div>
          </div>
        @include('flashmessage.validation')
          @include('flashmessage.flash')
        <form action="{{ route('short.update', $course->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Name Course<span style="color: red">*</span></label>
              <input type="text" class="form-control" name="name" value="{{ $course->name }}">
          </div>
          <div class="form-group">
              <label for="name">Information<span style="color: red">*</span></label>
              <textarea type="text" class="form-control" name="content">{{ $course->courseDetail->content }}</textarea>
          </div>
          <div class="row">
              <div class="col-md-4">
                <label for="name">Thumbnail Preview</label><br>
                <img src="{{ Storage::url($course->courseDetail->thumbnail) }}" style="width:200px" alt="">
              </div>
            <div class="col-md-5"> 
                <div class="form-group">
                    <label for="name">Thumbnail</label>
                    <input type="file" accept="image/*" class="form-control" name="thumbnail">
                    <span>max file 300kb</span>
                </div>
              </div>
          </div>
          <button class="btn btn-md btn-success btn-block">Update</button>
        </form>
      </div>

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')

@endpush