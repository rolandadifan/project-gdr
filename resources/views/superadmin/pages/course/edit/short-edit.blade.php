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
                  <h1 class="my-3">{{ $course->courseName }}</h1>
              </div>
              <div class="col-md-3 mt-6">
                @if ($course->status == 'inactive')
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
              <input type="text" class="form-control" name="courseName" value="{{ $course->courseName }}">
          </div>
          <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                <label for="name">Start Duration<span style="color: red">*</span></label>
                <input type="date" class="form-control" name="startPeriode" value="{{ $course->startPeriode }}">  
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="name">End Duration<span style="color: red">*</span></label>
                  <input type="date" class="form-control" name="endPeriode" value="{{ $course->endPeriode }}">
              </div>
            </div>
          </div>
          <div class="form-group">
              <label for="name">Information<span style="color: red">*</span></label>
              <textarea type="text" class="form-control" name="information">{{ $course->information }}</textarea>
          </div>
          <div class="row">
              <div class="col-md-4">
                <label for="name">Thumbnail Preview</label><br>
                <img src="{{ Storage::url($course->thumbnail) }}" style="width:200px" alt="">
              </div>
            <div class="col-md-5"> 
                <div class="form-group">
                    <label for="name">Thumbnail</label>
                    <input type="file" accept="image/*" class="form-control" name="thumbnail">
                    <span>max file 300kb</span>
                </div>
              </div>
          </div>
          <h3 class="mt-5">Detail Info</h3>
          <hr>
          <span>max detail 4</span>
          @foreach ($course->courseInfo as $courseDetail)
          <div class="row mt-3">
            <input type="hidden" class="form-control" value="{{ $courseDetail->id }}" name="id[]">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Title</label>
                  <input type="text" class="form-control" value="{{ $courseDetail->title }}" name="title[]">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label for="name">Info Course Detail</label>
                  @php
                  if( $courseDetail->info == null){
                   $string = null;
                  }else {
                     $courseinfo = json_decode( $courseDetail->info, true);
                    $string = null;
                    foreach ($courseinfo as $key) {
                      $string .=  $key. ',';
                    }
                  }
                  @endphp
                  <textarea type="text" class="form-control" name="info[]" placeholder="seperated comma">{{ $string  }} </textarea>
              </div>
            </div>
          </div>
          @endforeach
          <button class="btn btn-md btn-success btn-block">Update</button>
        </form>
      </div>

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')

@endpush