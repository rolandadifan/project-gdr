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
                    <img src="./../../assets/images/circle_image.png"  class="why-choose-photo mb-2" alt="">
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="file" accept="image/*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="Organization">
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
                            <input type="text" class="form-control" value="Clubs and societies">
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
                            <input type="text" class="form-control" value="Opportunity to Work">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control"></textarea>
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
                          <img src="./../../assets/images/circle_image.png"  class="mb-2 student-info-photo"  alt="">
                          <form action="" enctype="multipart/form-data" method="POST">
                              @csrf
                              <div class="form-group">
                                  <input type="file" accept="image/*" class="form-control">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" value="Campus H">
                              </div>
                              <div class="form-group">
                                  <textarea type="text" class="form-control"></textarea>
                              </div>
                              <button type="submit" class="btn btn-md btn-success">Edit</button>
                          </form>
                      </div>
                      <div class="col-md-6">
                          <img src="./../../assets/images/circle_image.png" class="mb-2 student-info-photo"  alt="">
                           <form action="" enctype="multipart/form-data" method="POST">
                              @csrf
                              <div class="form-group">
                                  <input type="file" accept="image/*" class="form-control">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" value="Sport Center">
                              </div>
                              <div class="form-group">
                                  <textarea type="text" class="form-control"></textarea>
                              </div>
                              <button type="submit" class="btn btn-md btn-success">Edit</button>
                          </form>
                      </div>
                  </div>
              </div>
              <h3 class="text-center mt-5 mb-3">Info 2</h3>
            <div class="row mb-3">
                <div class="col-md-4">
                     <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="Library">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
            </form>
                </div>
                <div class="col-md-4">
                     <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="The Integrated Laboratory">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
            </form>
                </div>
                <div class="col-md-4">
                     <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="Getting to Campus">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
            </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="Parking">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
            </form>
                </div>
                <div class="col-md-6">
                   <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="Life At Gunadarma">
                        </div>
                        <div class="form-group">
                            <textarea type="text" id="life-edit" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-success">Edit</button>
            </form>
                </div>
            </div>
            <div class="card py-3 px-3 mt-5 mb-3" style="background-color: #F7F7F4">
                <h3 class="text-center ">Info 3</h3>
                <div class="row">
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
                        <input type="text" class="form-control" value="Gunadarma University Student Community">
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
                        <input type="text" class="form-control" value="Career Planning">
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