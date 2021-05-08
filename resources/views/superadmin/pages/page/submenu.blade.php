@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">How To Apply Info</h1>
        {{-- <table id="table-menu-info" class="table-responsive-md display" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                  
                    <td>pending</td>  <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>about</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <form action="" class="d-inline" method="POST">
                          @method('delete')
                          @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                              <i class="fas fa-fw fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table> --}}
        <form action="{{ route('page.single') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" style="font-size: 24px">Single Unit Aplication</label>
                <input type="hidden" name="key" value="sigle-unit">
                <textarea name="value" class="form-control"  id="single" cols="30" rows="10">{!! $single ? $single->value : ''   !!}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
        <form action="{{ route('page.under') }}" class="mt-4" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" style="font-size: 24px">Undergraduate Degree Aplication</label>
                <input type="hidden" name="key" value="under-unit">
                <textarea name="value" class="form-control" id="under" cols="30" rows="10">{!! $under ? $under->value : ''   !!}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
        <form action="{{ route('page.postg') }}" class="mt-4" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" style="font-size: 24px">Postgraduate Degree Aplication</label>
                <input type="hidden" name="key" value="post-unit">
                <textarea name="value" class="form-control" id="postg" cols="30" rows="10">{!! $postg ? $postg->value : ''   !!}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
    </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
    var textarea1 = document.getElementById('single')
    CKEDITOR.replace(textarea1);
    var textarea2 = document.getElementById('under')
    CKEDITOR.replace(textarea2);
    var textarea3= document.getElementById('postg')
    CKEDITOR.replace(textarea3);
     $('#table-menu-info').DataTable({
        responsive: true
    });
</script>
@endpush