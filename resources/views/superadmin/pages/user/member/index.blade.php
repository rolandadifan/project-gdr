@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">User Info</h1>
        @include('flashmessage.validation')
            @include('flashmessage.flash')
        <table id="table-user-info" class="table-responsive-md display" width="100%">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No.Hp</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{ $item->name }} </td>
                <td> {{ $item->email }} </td>
                <td> {{ $item->telephone }} </td>
                <td>
                    <a href="{{ route('user.info', $item->id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-fw fa-edit"></i>
                    </a>
                    {{-- <form action="" class="d-inline" method="POST">
                      @method('delete')
                      @csrf
                        <button type="submit" class="btn btn-danger btn-sm">
                          <i class="fas fa-fw fa-trash"></i>
                        </button>
                    </form> --}}
                    <a href="#" 
                      data-id="masukan value id"
                      class="btn btn-danger btn-sm delete" 
                      data-toggle="modal" 
                      data-target="#deleteModal">
                      <i class="fas fa-fw fa-trash"></i>
                  </a>
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      </div>
      

    </div>
    <!-- /.container-fluid -->

 @include('superadmin.pages.user.member.delete')

@endsection

@push('addon-script')
<script>
    // data table
    $('#table-user-info').DataTable({
        responsive: true
    });
    $(document).on('click','.delete',function(){
         let id = $(this).attr('data-id');
         $('#id').val(id);
    });
</script>
@endpush