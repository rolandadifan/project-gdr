@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">
      <a class="btn btn-primary mb-3" href="{{ route('page.index') }}">Back To List</a>
      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">Edit Menu {{ $menu->title }}</h1>
         @include('flashmessage.validation')
        @include('flashmessage.flash')
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Single Menu</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form action="{{ route('page.update', $menu->id) }}" method="POST" class="mt-5">
                @method('put')
                @csrf
                  <div class="form-group">
                      <label for="">Menu Name</label>
                      <input type="text" name="title" id="" value="{{ $menu->title }}" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">Content</label>
                      <textarea name="content" id="menu-edit" class="form-control" rows="10">{{ $menu->content }}</textarea>
                  </div>
                  <button type="submit" class="btn btn-success btn-md btn-block">Submit</button>
              </form>
            </div>
            {{-- @include('superadmin.pages.page.form-submenu') --}}
            
          </div>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
      // CKEDITOR.replace( 'menu-edit' );
      var textarea = document.getElementById('menu-edit')
      CKEDITOR.replace(textarea);
</script>
@endpush