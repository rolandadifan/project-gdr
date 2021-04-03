@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">Create Menu</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Single Menu</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">With Submenu</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            @include('superadmin.pages.page.form-single-menu')
            @include('superadmin.pages.page.form-submenu')
            
          </div>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
      CKEDITOR.replace( 'menu-edit' );
      CKEDITOR.replace( 'submenu-edit' );
</script>
@endpush