@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Create Article</h1>
         @include('flashmessage.validation')
          @include('flashmessage.flash')
      <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="d-flex">
              <div class="form-group mr-5"  style="width: 400px;">
                  <label for="">Title</label>
                  <input type="text" name="artikelName" id="" class="form-control" required>
              </div>
              <div class="form-group" style="width: 300px">
                <label for="exampleFormControlSelect1">Type Article</label>
                <select class="form-control" name="type" id="exampleFormControlSelect1" required>
                  <option value="news">News</option>
                  <option value="event">Event</option>
                  <option value="scholarship">Scholarship</option>
                </select>
              </div>
            </div>
            <div class="form-group" style="width: 400px">
              <label for="">Thumbnail</label>
              <input type="file" name="thumbnail" id="" class="form-control" required>
              <span style="font-size: 16px">Maksimal file 300kb</span>
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="article-edit" class="form-control" rows="10" required></textarea>
            </div>
            <button class="btn btn-md btn-block btn-success">Save</button>
      </form>
      
      </div>
      

    </div>
    <!-- /.container-fluid -->

  

@endsection

@push('addon-script')
<script>
  var textarea = document.getElementById('article-edit')
   CKEDITOR.replace( textarea );
</script>
@endpush