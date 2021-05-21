@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">

      <!-- Content Row -->
      <div class="card py-3 px-3">
        <h1 class="mb-5">Requirment Info</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
       
        <form action="{{ route('course.post-update') }}" method="POST">
            @csrf
            <div class="form-group">
                @php
                    if($posG){
                        $posts = json_decode($posG->value);
                    }else {
                        $posts = '';
                    }
                @endphp
                <input for="title" class="form-control mb-3" disabled value="PostGraduate">
                <h3 class="mb-3">Header Information <span class="text-danger">*</span></h3>
                <span style="font-size: 12px">Max 50 word</span>
                <textarea name="cheader" class="form-control" maxlength="50"  id="postg" cols="30" rows="10" required>{!! $posts->header ?? '' !!}</textarea>
                <h3 class="mb-3 mt-3">Body Information</h3>
                <textarea name="content" class="form-control"  id="single" cols="30" rows="10">{!! $posts->content ?? '' !!}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
        <form action="{{ route('course.under-update') }}" method="POST" class="mt-5">
            @csrf
            <div class="form-group">
                @php
                    if($underG){
                        $unders = json_decode($underG->value);
                    }else {
                        $unders = '';
                    }
                @endphp
                <input for="title" class="form-control mb-3" disabled value="UnderGraduate">
                <h3 class="mb-3">Header Information <span class="text-danger">*</span></h3>
                <span style="font-size: 12px">Max 50 word</span>
                <textarea name="cheader" class="form-control" maxlength="50"  id="pos" cols="30" rows="10">{{ $unders->header ?? '' }}</textarea>
                <h3 class="mb-3 mt-3">Body Information</h3>
                <textarea name="content" class="form-control"  id="under" cols="30" rows="10">{{ $unders->content ?? '' }}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
    </div>
      

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
    var textarea1 = document.getElementById('single')
    CKEDITOR.replace(textarea1);
    var textarea2 = document.getElementById('under')
    CKEDITOR.replace(textarea2);
    var textarea3= document.getElementById('postg')
    CKEDITOR.replace(textarea3);
    var textarea3= document.getElementById('pos')
    CKEDITOR.replace(textarea3);
     $('#table-menu-info').DataTable({
        responsive: true
    });
</script>
@endpush