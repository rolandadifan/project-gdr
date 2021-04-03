@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Create Article</h1>
      <form action="">
          <div class="d-flex">
              <div class="form-group mr-5"  style="width: 400px;">
                  <label for="">Title</label>
                  <input type="text" name="" id="" class="form-control">
              </div>
              <div class="form-group" style="width: 300px">
                <label for="exampleFormControlSelect1">Type Article</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="news">News</option>
                  <option value="event">Event</option>
                  <option value="scholarship">Scholarship</option>
                </select>
              </div>
            </div>
            <div class="form-group" style="width: 400px">
              <label for="">Thumbnail</label>
              <input type="file" name="" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="article-edit" id="" class="form-control" rows="10"></textarea>
            </div>
      </form>
      
      </div>
      

    </div>
    <!-- /.container-fluid -->

  

@endsection

@push('addon-script')
<script>
   CKEDITOR.replace( 'article-edit' );
</script>
@endpush