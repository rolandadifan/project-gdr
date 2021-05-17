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
        <form action="{{ route('requirment.step-one') }}" method="POST">
            @csrf
            @php
            if($page_one){
                  $page_ones = json_decode($page_one->value);
              }else {
                  $page_ones = '';
              }
            @endphp
            <div class="form-group">
                <input for="title" class="form-control mb-3" name="title" value="{{ $page_ones ? $page_ones->title : 'Step 1' }}">
                <input type="hidden" name="key" value="step-1">
                <textarea name="content" class="form-control"  id="single" cols="30" rows="10">{!! $page_ones ? $page_ones->content : 'Application (Select Type)

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!' !!}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
        <form action="{{ route('requirment.step-two') }}" class="mt-4" method="POST">
            @csrf
            @php
            if($page_two){
                  $page_twos = json_decode($page_two->value);
              }else {
                  $page_twos = '';
              }
            @endphp
            <div class="form-group">
                <input for="title" class="form-control mb-3" name="title" value="{{$page_twos ?$page_twos->title : 'Step 2' }}">
                <input type="hidden" name="key" value="step-2">
                <textarea name="content" class="form-control" id="under" cols="30" rows="10">{{$page_twos ?$page_twos->content : 'Personal Details (Fill the Form)

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!' }}</textarea>
                <button type="submit" class="btn btn-success btn-md btn-block mt-3">Submit</button>
            </div>
        </form>
        <form action="{{ route('requirment.step-three') }}" class="mt-4" method="POST">
            @csrf
            @php
            if($page_three){
                  $page_threes = json_decode($page_three->value);
              }else {
                  $page_threes = '';
              }
            @endphp
            <div class="form-group">
                <input for="title" class="form-control mb-3" name="title" value="{{$page_threes ?$page_threes->title : 'Step 3' }}">
                <input type="hidden" name="key" value="step-3">
                <textarea name="content" class="form-control" id="postg" cols="30" rows="10">{{$page_threes ?$page_threes->content : 'Verification (Review and Submit)

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis debitis labore culpa esse voluptatum expedita quae excepturi beatae necessitatibus ducimus iusto, itaque voluptatibus distinctio eius ratione officiis et hic natus!' }}</textarea>
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
     $('#table-menu-info').DataTable({
        responsive: true
    });
</script>
@endpush