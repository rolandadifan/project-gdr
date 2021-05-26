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
        <h1 class="mb-5">Student Enrollment List</h1>
        <table id="table-news-info" class="table-responsive-md display" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Status</th>
                    <th>Submited Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollment as $item) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->course->name }}</td>
                    <td>{{ $item->status_id ==  4 ? 'Submited' : 'Progress'}}</td>
                    <td>{{ date('d/m/Y', strtotime($item->created_at))}}</td>
                    <td>
                        <a href="{{ route('enroll.detail', $item->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-user-check"></i>
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
                @endforeach
            </tbody>
        </table>
    </div>


</div>
<!-- /.container-fluid -->



@endsection

@push('addon-script')
<script>
// data table
$('#table-news-info').DataTable({
    responsive: true
});
// multi select
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
//modal
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>
@endpush
