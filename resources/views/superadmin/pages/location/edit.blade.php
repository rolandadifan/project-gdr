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
        <h1 class="mb-5">Alumni Review Update</h1>
        <button class="btn btn-primary" style="width: 200px;margin-bottom:4rem"
            onclick="location.href = '/sadmin/location'">Back to
            List</button>
        <form action="{{ route('location.update', $location->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="campus">Campus name</label>
                        <input name='campus' type="text" class="form-control" value="{{$location->campus}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name='address' type="text" class="form-control">{{$location->address}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input name='phone' type="text" class="form-control" value="{{$location->phone}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ext">Extension</label>
                        <input name='ext' type="text" class="form-control" value="{{$location->ext}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fax">Fax</label>
                        <input name='fax' type="text" class="form-control" value="{{$location->fax}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Thumbnail</label>
                        @isset($location->thumbnail)
                        <br />
                        <img src="{{ Storage::url($location->thumbnail) }}" class='mb-2' style="width: 200px;" />
                        @endisset
                        <input type="file" name="thumbnail" id="" class="form-control">
                        <span style="font-size: 16px">Maksimal file 300kb</span>
                    </div>
                </div>
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