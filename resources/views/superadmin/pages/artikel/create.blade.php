@extends('superadmin.layouts.admin')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Create {{ucfirst($defaultType)}} Article</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <button class="btn btn-primary" style="width: 200px;margin-bottom:4rem"
            onclick="location.href = '/sadmin/article/{{$defaultType}}'">Back to
            List</button>
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-flex">
                <div class="form-group mr-5" style="width: 400px;">
                    <label for="">Title</label>
                    <input maxlength="191" type="text" name="artikelName" id="" class="form-control" required>
                </div>
                <div class="form-group" style="width: 300px">
                    <label for="exampleFormControlSelect1">Type Article</label>
                    <select class="form-control" name="type" id="exampleFormControlSelect1" required>
                        @foreach ($tipe as $article_type)
                            @if(ucfirst($defaultType)===ucfirst($article_type->name))
                                <option value="{{ $article_type->id }}">
                                        {{ ucfirst($article_type->name) }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            @if ($defaultType==='research')
            <div class="form-group" style="width: 400px">
                <label for="">Research Type</label>
                <input type="text" name="group" id="" class="form-control" required>
            </div>
            @endif
            <div class="form-group" style="width: 400px">
                <label for="">Thumbnail</label>
                <input type="file" name="thumbnail" id="" class="form-control" required>
                <span style="font-size: 16px">Maksimal file 300kb</span>
            </div>
            <div class="form-group">
                <label for="excerpt">Excerpt / kutipan (<span style='text-align:right'
                        id="excerpt-counter">191</span>)</label>
                <textarea maxlength="191" onchange="countChar(this)" onkeydown="countChar(this)"
                    onkeyup="countChar(this)" id="excerpt-textarea" name="excerpt" class="form-control" rows="2"
                    required></textarea>

            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="article-edit" class="form-control" rows="10" required></textarea>
            </div>
            <button class="btn btn-md btn-block btn-success">Save</button>
        </form>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
@push('addon-script')
<script>
var excerptTextarea = document.getElementById('excerpt-textarea')
var excerptCounter = document.getElementById('excerpt-counter')

function countChar(val) {
    var len = val.value.length;
    if (len >= 191) {
        val.value = val.value.substring(0, 191);
    } else {
        excerptCounter.innerHTML = 191 - len - 1;
    }
};

var textarea = document.getElementById('article-edit')
CKEDITOR.replace(textarea);
</script>
@endpush