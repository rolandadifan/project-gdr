@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="my-3">Course Create</h1>
        @include('flashmessage.validation')
          @include('flashmessage.flash')
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="name">name<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="courseName" required>
            <div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Duration<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="duration"required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Campuses<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="campuses"required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">key Dates<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="keyDate"required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Deakin<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="deakinStudent"required>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Dagree<span style="color: red">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect2" name="typeDegree">
                            <option value="degree">Dagree</option>
                            <option value="non">Non Dagree</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                          <label for="name">Type<span style="color: red">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect2" name="typeCourse">
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
                <textarea type="text" class="form-control" name="information"required></textarea>
            <div>
            <h5 class="mt-3">Price Grade AA</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade AA<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradeAA"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksAA"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppAA"required>
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Price Grade A</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade A<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradA"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppA"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksA"required>
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Price Grade B</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Grade B<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="gradB"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">BPP<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="bppB"required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">SKS<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="sksB"required>
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