@extends('superadmin.layouts.admin')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <a class="btn btn-primary mb-3" href="{{ route('setting.index') }}">Back To List</a>
    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Edit Article</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <form action="{{ route('setting.update', $setting->key) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="d-flex">
                <div class="form-group mr-5" style="width: 400px;">
                    <label for="value">Value</label>
                    @if ($setting->key == 'landing-video-section-1')
                    <input type="text" name="value" class="form-control" value="{{ $setting->value }}">
                    hanya isi dengan id saja https://www.youtube.com/watch?v=<strong
                        style="color:indianred">SZesNKBVG3U</strong>
                    @else
                    <textarea name="value" id="article-edit" class="form-control" rows="10"
                        required>{{ $setting->value }}</textarea>
                    @endif
                </div>
            </div>
            <div class="form-group" style="width: 400px">
                <label for="">Thumbnail</label>
                @isset($setting->thumbnail)
                <img src="{{ Storage::url($setting->thumbnail) }}" height="200px" />
                @endisset
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