@extends('superadmin.layouts.admin')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Student Life Page</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
       
        <menu id="choose-gunadarma" class="mt-5 mb-3">
            <h3 class="text-center mb-3">Student life at Gunadarma</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ !$slpOne || $slpOne->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($slpOne->thumbnail) }}"  class="why-choose-photo mb-2" alt="">
                    <form action="{{ route('student.slp-one') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="keyChooseOne" value="{{ $slpOne ? $slpOne->key : ''  }}">
                        <div class="form-group">
                            <input type="file" accept="image/*" name="thumbnail" class="form-control">
                        </div>
                         @php
                                  if($slpOne){
                                        $slpones = json_decode($slpOne->value);
                                    }else {
                                        $slpones = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $slpones ? $slpones->title : 'Organization'    }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="content" class="form-control">{{ $slpones ? $slpones->content : ''    }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
                <div class="col-md-4">
                   <img src="{{ !$slpTwo || $slpTwo->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($slpTwo->thumbnail) }}"  class="why-choose-photo mb-2" alt="">
                    <form action="{{ route('student.slp-two') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="keyChooseOne" value="{{ $slpTwo ? $slpTwo->key : ''  }}">
                        <div class="form-group">
                            <input type="file" accept="image/*" name="thumbnail" class="form-control">
                        </div>
                         @php
                                  if($slpTwo){
                                        $slpTwos = json_decode($slpTwo->value);
                                    }else {
                                        $slpTwos = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $slpTwos ? $slpTwos->title : 'Clubs and societies'    }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="content" class="form-control">{{ $slpTwos ? $slpTwos->content : ''    }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
                <div class="col-md-4">
                     <img src="{{ !$slpThree || $slpThree->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($slpThree->thumbnail) }}"  class="why-choose-photo mb-2" alt="">
                    <form action="{{ route('student.slp-three') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="keyChooseOne" value="{{ $slpThree ? $slpThree->key : ''  }}">
                        <div class="form-group">
                            <input type="file" accept="image/*" name="thumbnail" class="form-control">
                        </div>
                         @php
                                  if($slpThree){
                                        $slpThrees = json_decode($slpThree->value);
                                    }else {
                                        $slpThrees = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $slpThrees ? $slpThrees->title : 'Opportunity to Work'    }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="content" class="form-control">{{ $slpThrees ? $slpThrees->content : ''    }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>

            </div>
        </menu>

          <menu id="campus-life">
              <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                <h3 class="text-center ">Info 1</h3>
                  <div class="row">
                      <div class="col-md-6">
                          <img src="{{ !$sio || $sio->thumbnail == null ? asset('assets/images/gunadarma-life.png') : Storage::url($sio->thumbnail) }}"  class="student-info-photo mb-2" alt="">
                    <form action="{{ route('student.sio') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="keyChooseOne" value="{{ $sio ? $sio->key : ''  }}">
                        <div class="form-group">
                            <input type="file" accept="image/*" name="thumbnail" class="form-control">
                        </div>
                         @php
                                  if($sio){
                                        $sios = json_decode($sio->value);
                                    }else {
                                        $sios = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $sios ? $sios->title : 'Campus H'    }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="content" class="form-control">{{ $sios ? $sios->content : ''    }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                      </div>
                      <div class="col-md-6">
                           <img src="{{ !$sit || $sit->thumbnail == null ? asset('assets/images/gunadarma-life.png') : Storage::url($sit->thumbnail) }}"  class="student-info-photo mb-2" alt="">
                    <form action="{{ route('student.sit') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="keyChooseOne" value="{{ $sit ? $sit->key : ''  }}">
                        <div class="form-group">
                            <input type="file" accept="image/*" name="thumbnail" class="form-control">
                        </div>
                         @php
                                  if($sit){
                                        $sits = json_decode($sit->value);
                                    }else {
                                        $sits = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $sits ? $sits->title : 'Sport Center'    }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="content" class="form-control">{{ $sits ? $sits->content : ''    }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                      </div>
                  </div>
              </div>
              <h3 class="text-center mt-5 mb-3">Info 2</h3>
            <div class="row mb-3">
                <div class="col-md-4">
                    <form action="{{ route('student.sithree') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $sithree ? $sithree->key : '' }}">
                         @php
                                  if($sithree){
                                        $sithrees = json_decode($sithree->value);
                                    }else {
                                        $sithrees = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $sithrees ? $sithrees->title : 'Library' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $sithrees ? $sithrees->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
                <div class="col-md-4">
                     <form action="{{ route('student.sif') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $sif ? $sif->key : '' }}">
                         @php
                                  if($sif){
                                        $sifs = json_decode($sif->value);
                                    }else {
                                        $sifs = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $sifs ? $sifs->title : 'The Integrated Laboratory' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $sifs ? $sifs->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
                <div class="col-md-4">
                     <form action="{{ route('student.siv') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $siv ? $siv->key : '' }}">
                         @php
                                  if($siv){
                                        $sivs = json_decode($siv->value);
                                    }else {
                                        $sivs = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $sivs ? $sivs->title : 'Getting to Campus' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $sivs ? $sivs->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                  <form action="{{ route('student.six') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $six ? $six->key : '' }}">
                         @php
                                  if($six){
                                        $sixs = json_decode($six->value);
                                    }else {
                                        $sixs = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $sixs ? $sixs->title : 'Parking' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $sixs ? $sixs->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
                <div class="col-md-6">
                  <form action="{{ route('student.sis') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $sis ? $sis->key : '' }}">
                         @php
                                  if($sis){
                                        $siss = json_decode($sis->value);
                                    }else {
                                        $siss = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $siss ? $siss->title : 'Life At Gunadarma' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $siss ? $siss->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                </div>
            </div>
            <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                <h3 class="text-center ">Info 3</h3>
                <div class="row">
                    <div class="col-md-6">
                          <form action="{{ route('student.sie') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="{{!$sie || $sie->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($sie->thumbnail) }}" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <input type="hidden" name="key" value="{{ $sie ? $sie->key : '' }}">
                            @php
                                  if($sie){
                                        $sies = json_decode($sie->value);
                                    }else {
                                        $sies = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $sies ? $sies->title : 'Gunadarma University Student Community' }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-2" name="content" class="form-control">{{ $sies ? $sies->content : '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                         <form action="{{ route('student.sin') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="{{!$sin || $sin->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($sin->thumbnail) }}" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <input type="hidden" name="key" value="{{ $sin ? $sin->key : '' }}">
                            @php
                                  if($sin){
                                        $sins = json_decode($sin->value);
                                    }else {
                                        $sins = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $sins ? $sins->title : 'Career Planning' }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-2" name="content" class="form-control">{{ $sins ? $sins->content : '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                </div>

            </div>
        </menu>



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