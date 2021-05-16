@extends('superadmin.layouts.admin')
@section('content')


<!-- Topbar -->

<!-- End of Topbar -->

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mb-5">Settings</h1>
        <table id="table-menu-info" class="table-responsive-md display" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->status->value }}</td>
                    <td>
                        <a href="{{ route('page.edit', $item->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-fw fa-edit"></i>
                        </a>
                        <form action="" class="d-inline" method="POST">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-info btn-sm" data-toggle="tooltip"
                                data-placement="bottom" title="Make Active">
                                <i class="fas fa-fw fa-check"></i>
                            </button>
                        </form>
                        <form action="" class="d-inline" method="POST">
                            @method('put')
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-sm" data-toggle="tooltip"
                                data-placement="bottom" title="Make InActive">
                                <i class="fas fa-fw fa-times"></i>
                            </button>
                        </form>
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


@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
$('#table-menu-info').DataTable({
    responsive: true
});
</script>
@endpush