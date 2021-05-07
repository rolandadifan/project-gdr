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
        <h1 class="mb-5">Course List</h1>
        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Short Course</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Course</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <table id="table-course-short" class="table-responsive-md display" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shortCourse as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->status->value }}</td>
                            <td>
                                <a href="{{ route('short.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Add Info">
                                    <i class="fas fa-fw fa-plus"></i>
                                </a>
                                <form action="{{ route('course.status.active', $item->id) }}" class="d-inline"
                                    method="POST">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm" data-toggle="tooltip"
                                        data-placement="bottom" title="Make Active">
                                        <i class="fas fa-fw fa-check"></i>
                                    </button>
                                </form>
                                <form action="{{ route('course.status.inactive', $item->id) }}" class="d-inline"
                                    method="POST">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm" data-toggle="tooltip"
                                        data-placement="bottom" title="Make InActive">
                                        <i class="fas fa-fw fa-times"></i>
                                    </button>
                                </form>
                                <form action="{{ route('course.destroy', $item->id) }}" class="d-inline" method="POST">
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
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table id="table-course" class="table-responsive-md display mt-3" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($course as $cours)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cours->name }}</td>
                            <td>{{ $cours->courseDetail->degree }}</td>
                            <td>{{ $cours->status->value }}</td>
                            <td>
                                <a href="{{ route('course.edit', $cours->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-fw fa-edit"></i>
                                </a>
                                <form action="{{ route('course.status.active', $cours->id) }}" class="d-inline"
                                    method="POST">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm" data-toggle="tooltip"
                                        data-placement="bottom" title="Make Active">
                                        <i class="fas fa-fw fa-check"></i>
                                    </button>
                                </form>
                                <form action="{{ route('course.status.inactive', $cours->id) }}" class="d-inline"
                                    method="POST">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="btn btn-secondary btn-sm" data-toggle="tooltip"
                                        data-placement="bottom" title="Make InActive">
                                        <i class="fas fa-fw fa-times"></i>
                                    </button>
                                </form>
                                <form action="{{ route('course.destroy', $cours->id) }}" class="d-inline" method="POST">
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
    </div>


</div>
<!-- /.container-fluid -->


@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
// data table
$('#table-course-short').DataTable({
    responsive: true
});
$('#table-course').DataTable({
    responsive: true
});
// multi select
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endpush