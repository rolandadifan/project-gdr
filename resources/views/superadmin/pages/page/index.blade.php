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
                @php $i = 0; @endphp
                @foreach ($settings as $setting)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$setting->key}}</td>
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
