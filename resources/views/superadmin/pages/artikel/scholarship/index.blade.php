@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <h1 class="mb-5">Article Scholarship Info</h1>
        <a class="btn btn-primary btn-add-admin align-self-end mb-3" href="{{ route('artikel.create') }}">
            <i class="fas fa-fw fa-plus"></i>
            create
          </a>
        <table id="table-scholarship-info" class="table-responsive-md display" width="100%">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No.Hp</th>
                  <th>Role</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
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
      </table>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  

@endsection

@push('addon-script')
<script>
    // data table
    $('#table-scholarship-info').DataTable({
        responsive: true
    });
    // multi select
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    //modal
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
@endpush