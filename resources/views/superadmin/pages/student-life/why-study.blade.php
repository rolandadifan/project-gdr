@extends('superadmin.layouts.admin')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Why Study Page</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        
        <menu id="sneak-peak">
            <h3 class="text-center mb-3">Sneak Peak Gunadarma</h3>
            <div class="row">
                <div class="col-md-4">
                    <video class="youtube__content"  width="550" height="240" style="max-width: 100%; height: auto;" src="{{ !$sneakpeak || $sneakpeak->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($sneakpeak->thumbnail) }}" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the 
                 </video>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('student.sneakpeak') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="keySneakPeak"  value="{{ $sneakpeak ? $sneakpeak->key : ''  }}">
                        <div class="form-group">
                            <label for="">Update Video</label>
                            <input type="file" accept="video/*" name="thumbnail" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </menu>
        
        <menu id="choose-gunadarma" class="mt-5 mb-3">
            <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                <h3 class="text-center mb-3">Choose Gunadarma</h3>
                <div class="row">
                    <div class="col-md-4">
                         <img src="{{ !$chooseOne || $chooseOne->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($chooseOne->thumbnail) }}" class="why-choose-photo mb-2" alt="">
                        <form action="{{ route('student.choose-one') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="keyChooseOne" value="{{ $chooseOne ? $chooseOne->key : ''  }}">
                            <div class="form-group">
                                <input type="file" accept="image/*" name="thumbnail" class="form-control">
                            </div>
                            @php
                                  if($chooseOne){
                                        $chooseones = json_decode($chooseOne->value);
                                    }else {
                                        $chooseones = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $chooseones ? $chooseones->title : 'WorkSpace Learning'    }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content" class="form-control">{{  $chooseones ? $chooseones->content : ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ !$chooseTwo || $chooseTwo->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($chooseTwo->thumbnail) }}" class="why-choose-photo mb-2" alt="">
                         <form action="{{ route('student.choose-two') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="file" accept="image/*" name="thumbnail" class="form-control">
                            </div>
                             @php
                                  if($chooseTwo){
                                        $choosetwos = json_decode($chooseTwo->value);
                                    }else {
                                        $choosetwos = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $choosetwos ? $choosetwos->title : 'Supporting Your Study'    }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content"  class="form-control">{{  $choosetwos ? $choosetwos->content : ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <img src="{{ !$chooseThree || $chooseThree->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($chooseThree->thumbnail) }}" class="why-choose-photo mb-2" alt="">
                        </div>
                         <form action="{{ route('student.choose-three') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="file" accept="image/*" name="thumbnail" class="form-control">
                            </div>
                             @php
                                  if($chooseThree){
                                        $choosethrees = json_decode($chooseThree->value);
                                    }else {
                                        $choosethrees = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $choosethrees ? $choosethrees->title : 'Building Your Career'    }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content" class="form-control">{{ $choosethrees ? $choosethrees->content : ''    }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </menu>

        <menu id="information">
            {{-- information 1 --}}
            <h3 class="text-center mt-5 mb-3">Information 1</h3>
             <form action="{{ route('student.lat') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $lat ? $lat->key : '' }}">
                         @php
                                  if($lat){
                                        $lats = json_decode($lat->value);
                                    }else {
                                        $lats = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $lats ? $lats->title : 'Life At Gunadarma' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $lats ? $lats->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>

                    {{-- information 2 --}}
                    <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                        <h3 class="text-center mb-3">Information 2</h3>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                 <form action="{{ route('student.wio') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="{{!$wio || $wio->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($wio->thumbnail) }}" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <input type="hidden" name="key" value="{{ $wio ? $wio->key : '' }}">
                            @php
                                  if($wio){
                                        $wios = json_decode($wio->value);
                                    }else {
                                        $wios = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $wios ? $wios->title : 'Extracurricular' }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-2" name="content" class="form-control">{{ $wios ? $wios->content : '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                            </div>
                            <div class="col-md-6">
                                 <form action="{{ route('student.wit') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                             <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="{{!$wit || $wit->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($wit->thumbnail) }}" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <input type="hidden" name="key" value="{{ $wit ? $wit->key : '' }}">
                             @php
                                  if($wit){
                                        $wits = json_decode($wit->value);
                                    }else {
                                        $wits = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $wits ? $wits->title : 'Campus Locations'}}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-3" name="content" class="form-control">{{ $wits ? $wits->content : ''}}</textarea>
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

// var textarea = document.getElementById('life-edit')
// CKEDITOR.replace(textarea);
// var textarea = document.getElementById('life-edit-2')
// CKEDITOR.replace(textarea);
// var textarea = document.getElementById('life-edit-3')
// CKEDITOR.replace(textarea);
</script>
@endpush