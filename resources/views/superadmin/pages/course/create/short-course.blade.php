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
              <input type="text" class="form-control" name="name" required>
          </div>
          <div class="form-group">
              <label for="name">Information<span style="color: red">*</span></label>
              <textarea type="text" class="form-control" name="content" required></textarea>
          </div>
          <div class="form-group">
              <label for="name">Thumbnail<span style="color: red">*</span></label>
              <input type="file" accept="image/*" class="form-control" name="thumbnail" required>
              <span>max file 300kb</span>
          </div>
          <h3>Course Info</h3>
           <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
          <button class="btn btn-md btn-success btn-block">Save</button>
        </form>
      </div>

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
    {{-- <script>
      $(document).ready(function(){
        var i=1;
        $('#add').on('click', .btn)
      })
    </script> --}}
@endpush