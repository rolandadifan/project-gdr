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
        <h1 class="mb-5">Admin Info</h1>
        <button type="button" class="btn btn-primary btn-add-admin align-self-end mb-3" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-fw fa-plus"></i>
          Add Admin
        </button>
        <table id="table-admin-info" class="table-responsive-md display" width="100%">
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
              @foreach ($users as $item)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->telephone }}</td>
                  <td>{{ $item->role }}</td>
                  <td>
                      <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning btn-sm">
                          <i class="fas fa-fw fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.destroy',$item->id) }}" class="d-inline" method="POST">
                        @method('delete')
                        @csrf
                          <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-fw fa-trash"></i>
                          </button>
                      </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
    // data table
    $('#table-admin-info').DataTable({
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