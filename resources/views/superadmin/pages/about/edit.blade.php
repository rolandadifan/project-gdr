@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">About Setting</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <div class="d-flex img-about">
            <img src="{{ !$about || $about->thumbnail == null ? 'https://images.unsplash.com/photo-1615493932275-441bb55ba0bf?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80' : Storage::url($about->thumbnail)  }}" width="200" alt="">
            <form action="{{ route('about.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="key" value="{{ $about ? $about->key : ''  }}">
                <div class="form-group">
                    <label for="" class="ml-4 label-about-image" >Change Image</label>
                    <input type="file" accept="image/*" class="form-control edit-input-image-about" name="thumbnail">
                </div>
                <button type="submit" class="btn btn-success btn-md ml-4 px-5 py-1">save</button>
            </form>
        </div>
        <div class="content-about">
            <div>
                <form action="{{ route('about.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @php
                       if($about){
                           $abouts = json_decode($about->value);
                       }else {
                           $abouts = '';
                       }
                    @endphp
                    <input type="hidden" name="key" value="{{ $about ? $about->key : ''  }}">
                    <div class="form-group">
                        <label for="excerpt" class="mt-5">Excerpt / kutipan (<span style='text-align:right'
                                id="excerpt-counter">191</span>)</label>
                        <textarea maxlength="191" onchange="countChar(this)" onkeydown="countChar(this)"
                            onkeyup="countChar(this)" id="excerpt-textarea" name="excerpt" class="form-control" rows="2"
                            required>{{$abouts ? $abouts->excerpt : ''}}</textarea>

                    </div>
                    <div class="form-group">
                        <label for="" class="mt-2 label-about-content">Content</label>
                        <textarea class="form-control" name="content" id="abouts"  rows="20">{{$abouts ? $abouts->content : '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-md btn-success btn-save-about-content">save</button>
                </form>
            </div>

        </div>
      </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
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
var textarea = document.getElementById('abouts')
CKEDITOR.replace(textarea);
</script>
@endpush