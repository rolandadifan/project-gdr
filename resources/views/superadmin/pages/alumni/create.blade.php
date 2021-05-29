@extends('superadmin.layouts.admin')
@section('content')


<!-- Topbar -->

<!-- End of Topbar -->

<!-- Begin Page Content -->

<div class="container-fluid">
<a class="btn btn-primary mb-3" href="{{ route('alumni-info.index') }}">Back To List</a>
    <!-- Content Row -->
    <div class="card py-3 px-3">
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <h1 class="mb-5">Alumni Review Create</h1>
        <form action="{{ route('alumni-info.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alumnusName">Nama alumni</label>
                        <select name='alumnusName' class="form-control" id="alumnusName">
                            <option value="null">--pilih--</option>
                            @foreach($users as $user)
                            <option value='{{$user->id}}'>{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="courseName">Course</label>
                        <select name='courseName' class="form-control" id="courseName">
                            <option value="null">--pilih--</option>
                            @foreach($courses as $course)
                            <option value='{{$course->id}}'>{{$course->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name='name' type="text" class="form-control">
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="predicate">Predicate</label>
                        <input name='predicate' type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="isTop">Is top 3</label>
                        <select name='isTop' class="form-control" id="isTop">
                            <option value='0'>Tidak</option>
                            <option value='1'>Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Thumbnail</label>
                        <input type="file" name="thumbnail" id="" class="form-control" required>
                        <span style="font-size: 16px">Maksimal file 300kb</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Testimonial</label>
                <textarea name='testimony' type="text" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-md btn-block">Submit</button>
        </form>

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
    $('#alumnusName').select2();
    $('#courseName').select2();
});
//modal
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>
@endpush
