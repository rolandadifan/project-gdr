@extends('superadmin.layouts.admin')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Edit Article</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <button class="btn btn-primary" style="width: 200px;margin-bottom:4rem"
            onclick="location.href = '/sadmin/setting'">Back to
            List</button>
        <form action="{{ route('setting.update', $setting->key) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="d-flex">
                <div class="form-group mr-5" style="width: 400px;">
                    <label for="">Value</label>
                    <textarea name="value" id="article-edit" class="form-control" rows="10"
                        required>{{ $setting->value }}</textarea>
                </div>
            </div>
            <div class="form-group" style="width: 400px">
                <label for="">Thumbnail</label>
                <img src="{{ Storage::url($setting->thumbnail) }}" height="200px" />
                <input type="file" name="thumbnail" id="" class="form-control">
                <span style="font-size: 16px">Maksimal file 300kb</span>
            </div>
            <button class="btn btn-md btn-block btn-success">Edit</button>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
@push('addon-script')
<script>
var textarea = document.getElementById('article-edit')
CKEDITOR.replace(textarea);
</script>
@endpush
