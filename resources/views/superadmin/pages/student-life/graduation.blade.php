@extends('superadmin.layouts.admin')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="mt-3 mb-5">Graduation Page</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
       

         <menu id="sneak-peak">
            <h3 class="text-center mb-3">Sneak Peak Graduation</h3>
            <div class="row">
                <div class="col-md-4">
                   <video class="youtube__content"  width="550" height="240" style="max-width: 100%; height: auto;" src="{{ !$spg || $spg->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($spg->thumbnail) }}" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the 
                 </video>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('student.spg') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="key"  value="{{ $spg ? $spg->key : ''  }}">
                        <div class="form-group">
                            <label for="">Update Video</label>
                            <input type="file" accept="image/*" name="thumbnail" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </menu>
        
        <menu id="choose-gunadarma" class="mt-5 mb-3">
            <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                <h3 class="text-center mb-3">Choose Gunadarma Graduation</h3>
                <div class="row">
                    <div class="col-md-4">
                       <img src="{{ !$gio || $gio->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($gio->thumbnail) }}"  class="why-choose-photo mb-2" alt="">
                        <form action="{{ route('student.gio') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="keygio" value="{{ $gio ? $gio->key : ''  }}">
                            <div class="form-group">
                                <input type="file" accept="image/*" name="thumbnail" class="form-control">
                            </div>
                            @php
                                  if($gio){
                                        $gios = json_decode($gio->value);
                                    }else {
                                        $gios = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $gios ? $gios->title : 'WorkSpace Learning'    }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content" class="form-control">{{  $gios ? $gios->content : ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                         <img src="{{ !$git || $git->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($git->thumbnail) }}"  class="why-choose-photo mb-2" alt="">
                        <form action="{{ route('student.git') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="keygit" value="{{ $git ? $git->key : ''  }}">
                            <div class="form-group">
                                <input type="file" accept="image/*" name="thumbnail" class="form-control">
                            </div>
                            @php
                                  if($git){
                                        $gits = json_decode($git->value);
                                    }else {
                                        $gits = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $gits ? $gits->title : 'WorkSpace Learning'    }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content" class="form-control">{{  $gits ? $gits->content : ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ !$githree || $githree->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($githree->thumbnail) }}"  class="why-choose-photo mb-2" alt="">
                        <form action="{{ route('student.githree') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="keygithree" value="{{ $githree ? $githree->key : ''  }}">
                            <div class="form-group">
                                <input type="file" accept="image/*" name="thumbnail" class="form-control">
                            </div>
                            @php
                                  if($githree){
                                        $githrees = json_decode($githree->value);
                                    }else {
                                        $githrees = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $githrees ? $githrees->title : 'Building Your Career'    }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="content" class="form-control">{{  $githrees ? $githrees->content : ''}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </menu>

        <menu id="information">
            <h3 class="text-center mt-5 mb-3">Information 1</h3>
              <form action="{{ route('student.gif') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="key" value="{{ $gif ? $gif->key : '' }}">
                         @php
                                  if($gif){
                                        $gifs = json_decode($gif->value);
                                    }else {
                                        $gifs = '';
                                    }
                            @endphp
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" value="{{ $gifs ? $gifs->title : 'Graduations' }}">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" name="content" class="form-control">{{ $gifs ? $gifs->content : '' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                    <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                        <h3 class="text-center mb-3">Information 2</h3>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                  <form action="{{ route('student.giv') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="{{!$giv || $giv->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($giv->thumbnail) }}" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <input type="hidden" name="key" value="{{ $giv ? $giv->key : '' }}">
                            @php
                                  if($giv){
                                        $givs = json_decode($giv->value);
                                    }else {
                                        $givs = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $givs ? $givs->title : 'Ceremony Video 2020' }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-2" name="content" class="form-control">{{ $givs ? $givs->content : '' }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('student.gix') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="{{!$gix || $gix->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($gix->thumbnail) }}" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <input type="hidden" name="key" value="{{ $gix ? $gix->key : '' }}">
                            @php
                                  if($gix){
                                        $gixs = json_decode($gix->value);
                                    }else {
                                        $gixs = '';
                                    }
                            @endphp
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" value="{{ $gixs ? $gixs->title : 'Graduation Day at Gunadarma' }}">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-2" name="content" class="form-control">{{ $gixs ? $gixs->content : '' }}</textarea>
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