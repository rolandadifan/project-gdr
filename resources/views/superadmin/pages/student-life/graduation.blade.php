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
                    <video class="youtube__content"  width="550" height="240" style="max-width: 100%; height: auto;" src="https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the 
                     <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive
                     </a> 
                 </video>
                </div>
                <div class="col-md-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
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
                        <img src="./../../assets/images/circle_image.png"  class="why-choose-photo mb-2" alt="">
                        <form action="" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="file" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="WorkSpace Learning">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="./../../assets/images/circle_image.png" class="why-choose-photo mb-2" alt="">
                         <form action="" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="file" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Supporting Your Study">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center">
                            <img src="./../../assets/images/circle_image.png" class="why-choose-photo mb-2" alt="">
                        </div>
                         <form action="" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="file" accept="image/*" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Building Your Career">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </menu>

        <menu id="information">
            <h3 class="text-center mt-5 mb-3">Information 1</h3>
             <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="Graduations">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
                    </form>
                    <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                        <h3 class="text-center mb-3">Information 2</h3>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                 <form action="" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Ceremony Video 2020">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-2" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-success">Edit</button>
                        </form>
                            </div>
                            <div class="col-md-6">
                                 <form action="" enctype="multipart/form-data" method="POST">
                            @csrf
                             <div class="d-flex align-items-center">
                                 <video class="cardVideo__content why-choose-video mb-3" src="https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4" controls> 
                                        Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                             <div class="form-group">
                                <label for="">Update Video</label>
                                <input type="file" accept="video/*" name="thumbnail" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Graduation Day at Gunadarma">
                            </div>
                            <div class="form-group">
                                <textarea type="text" id="life-edit-3" class="form-control"></textarea>
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