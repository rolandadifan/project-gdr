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
              <div class="col-md-3 mt-3">
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
        <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
            <div class="form-group">
                <label for="name">name<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="name" value="{{ $course->name }}">
            <div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Duration<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="duration" value="{{ $course->courseDetail->duration }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Campuses<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="campus" value="{{ $course->courseDetail->campus }}">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">key Dates<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="key_dates" value="{{ $course->courseDetail->key_dates }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Deakin<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="deaken_student" value="{{ $course->courseDetail->deaken_student }}">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                          <label for="name">Type<span style="color: red">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect2" name="degree">
                            <option value="{{ $course->courseDetail->degree }}">{{ ucfirst($course->courseDetail->degree) }}</option>
                            <option value="diploma">Diploma</option>
                            <option value="bachelor">Bachelor</option>
                            <option value="master">Master</option>
                            <option value="doctor">Doctor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Information<span style="color: red">*</span></label>
                <textarea type="text" class="form-control" name="content"required>{{ $course->courseDetail->content }}</textarea>
            <div>
            <h5 class="mt-3">Price Grade AA</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade AA<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradeAA" value="{{ $price['AA'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppAA" value="{{ $price['AA_BPP'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksAA" value="{{ $price['AA_SKS'] }}">
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Price Grade A</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade A<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradeA" value="{{ $price['A'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppA" value="{{ $price['A_BPP'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksA" value="{{ $price['A_SKS'] }}">
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Price Grade B</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade B<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradeB" value="{{ $price['B'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppB" value="{{ $price['B_BPP'] }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksB" value="{{ $price['B_SKS'] }}">
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