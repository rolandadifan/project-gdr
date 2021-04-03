@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">About Setting</h1>
        <div class="d-flex img-about">
            <img src="https://images.unsplash.com/photo-1615493932275-441bb55ba0bf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" width="300" alt="">
            <form action="">
                <div class="form-group">
                    <label for="" class="ml-4 label-about-image" >Change Image</label>
                    <input type="file" class="form-control edit-input-image-about" name="">
                </div>
                <button type="submit" class="btn btn-success btn-md ml-4 px-5 py-1">save</button>
            </form>
        </div>
        <div class="content-about">
            <div>
                <form action="">
                    <div class="form-group">
                        <label for="" class="mt-5 label-about-content">Content</label>
                        <textarea class="form-control" name="about-edit" id="about-edit"  rows="20"></textarea>
                    </div>
                    <button type="submit" class="btn btn-md btn-success btn-save-about-content">save</button>
                </form>
            </div>

        </div>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
    CKEDITOR.replace( 'about-edit' );
</script>
@endpush