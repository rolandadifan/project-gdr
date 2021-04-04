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
              <div class="col-md-3 mt-3">
                  <a href="" class="btn btn-md btn-info btn-block">Publish</a>
              </div>
          </div>
        @include('flashmessage.validation')
          @include('flashmessage.flash')
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="name">name<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="courseName" value="{{ $course->courseName }}">
            <div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Duration<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="duration" value="{{ $course->duration }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Campuses<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="campuses" value="{{ $course->campuses }}">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">key Dates<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="keyDate" value="{{ $course->keyDate }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Deakin<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="deakinStudent" value="{{ $course->deakinStudent }}">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Dagree<span style="color: red">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect2" name="typeDegree">
                            <option value="{{ $course->typeDegree }}">{{ $course->typeDegree }}</option>
                            <option value="degree">Dagree</option>
                            <option value="non">Non Dagree</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                          <label for="name">Type<span style="color: red">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect2" name="typeCourse">
                            <option value="{{ $course->typeCourse }}">{{  $course->typeCourse  }}</option>
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
                <textarea type="text" class="form-control" name="information"required>{{  $course->information  }}</textarea>
            <div>
            <h5 class="mt-3">Price Grade AA</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade AA<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradeAA" value="{{  $course->gradeAA  }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksAA" value="{{  $course->sksAA  }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppAA" value="{{  $course->bppAA  }}">
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Price Grade A</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade A<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradA" value="{{  $course->gradA  }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppA" value="{{  $course->bppA  }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksA" value="{{  $course->sksA  }}">
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Price Grade B</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade B<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradB" value="{{  $course->gradB  }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppB" value="{{  $course->bppB  }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksB" value="{{  $course->sksB  }}">
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