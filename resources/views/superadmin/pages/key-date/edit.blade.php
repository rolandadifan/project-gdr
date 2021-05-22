@extends('superadmin.layouts.admin')
@section('content')


<!-- Topbar -->

<!-- End of Topbar -->

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Content Row -->
    <a class="btn btn-primary mb-3" href="{{ route('key-date.index') }}">Back To List</a>
    <div class="card py-3 px-3">
        <h1 class="my-3">Edit {{ $keys->period }}</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <form action="{{ route('key-date.update', $keys->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Period<span style="color: red">*</span></label>
                        <input type="text" class="form-control" value="{{ $keys->period }}" name="period" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Close Date<span style="color: red">*</span></label>
                        <input type="date" class="form-control" value="{{ $keys->close_date }}"  name="close_date" id="" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Is_Open<span style="color: red">*</span></label>
                <select class="form-control" name="open_status"  id="exampleFormControlSelect1" required>
                    <option value="{{ $keys->open_status }}">{{ ucfirst($keys->open_status) }}</option>
                    <option value="close">Close</option>
                    <option value="open">Open</option>
                </select>
            </div>
            <button class="btn btn-md btn-success btn-block btn-save" type="submit">Save</button>
        </form>
        <div class="row mb-3 mt-5" >
            <h4 class="mr-3">Key Date Detail</h4>
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#exampleModal">
                    Add More Info
            </button>
        </div>
        <table id="table-news-info" class="table-responsive-md display" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Period</th>
                    <th>Application Open</th>
                    <th>Application Close</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keyDetail as $item)
                <tr id="info_{{$item->id}}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title == null ? 'tolong edit bagian ini atau hapus' :  $item->title }}</td>
                    <td>{{ $item->activities == null ? 'tolong edit bagian ini atau hapus' : $item->activities}}</td>
                    <td>{{ $item->date == null ? 'tolong bagian edit ini atau hapus' : $item->date}}</td>
                    <td>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <a href="" class="btn btn-warning btn-sm btn-to-edit-modal" data-toggle="modal" data-target='#practice_modal' data-id="{{ $item->id }}" data-title="{{ $item->title }}" data-activities="{{ $item->activities }}" data-date="{{ $item->date }}">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <form action="{{ route('key-date.deleteInfo', $item->id) }}" class="d-inline" method="POST">
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


 <div class="modal fade" id="practice_modal" tabindex="-1" aria-labelledby="info" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="info">Edit Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('key-date.editInfo') }}">
                @csrf
                <input type="hidden" name="id" class="id">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control title" required>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" name="date" class="form-control date" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Activities</label>
                  <input type="text" name="activities" class="form-control activities" required>
                </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary">Update</button>
                  </div>
              </form>
        </div>
        
      </div>
    </div>
  </div>

@include('superadmin.pages.key-date.modal-create-info' , ['keyId' => $keys->id])
@endsection

@push('addon-script')
<script>
    $('#table-news-info').DataTable({
    responsive: true
});

 $('#table-news-info').on('click', '.btn-to-edit-modal', function () {
    let id = $(this).data('id');
    let title = $(this).data('title');
    let activities = $(this).data('activities');
    let date = $(this).data('date');
    $('#practice_modal').modal('show');
    $('.id').val(id);
    $('.title').val(title);
    $('.activities').val(activities);
    $('.date').val(date);
})
$.ajaxSetup({
     headers: {
        '_token': $('meta[name="csrf-token"]').attr('content')
         }
});



</script>
@endpush
