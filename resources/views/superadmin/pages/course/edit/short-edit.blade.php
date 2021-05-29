@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <a class="btn btn-primary mb-3" href="{{ route('course.index') }}">Back To List</a>

      <!-- Content Row -->
      <div class="card py-3 px-3">
          <div class="row">
              <div class="col-md-9">
                  <h1 class="my-3">{{ $course->name }}</h1>
              </div>
              <div class="col-md-3 mt-6">
                @if ($course->status_id == '2')
                <form action="{{ route('course.status.active', $course->id) }}" method="POST">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn btn-md btn-warning btn-block">Make Active</button>
                </form>
                @else
                 <form action="{{ route('course.status.inactive', $course->id) }}" method="POST">
                  @csrf
                  @method('put')
                  <button type="submit" class="btn btn-md btn-danger btn-block">Make InActive</button>
                </form>
                @endif
              </div>
          </div>
        @include('flashmessage.validation')
          @include('flashmessage.flash')
        <form action="{{ route('short.update', $course->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Name Course<span style="color: red">*</span></label>
              <input type="text" class="form-control" name="name" value="{{ $course->name }}">
          </div>
          <div class="form-group">
              <label for="name">Information<span style="color: red">*</span></label>
              <textarea type="text" class="form-control" name="content">{{ $course->courseDetail->content }}</textarea>
          </div>
          <div class="row">
              <div class="col-md-4">
                <label for="name">Thumbnail Preview</label><br>
                <img src="{{ Storage::url($course->courseDetail->thumbnail) }}" style="width:200px" alt="">
              </div>
            <div class="col-md-5"> 
                <div class="form-group">
                    <label for="name">Thumbnail</label>
                    <input type="file" accept="image/*" class="form-control" name="thumbnail">
                    <span>max file 300kb</span>
                </div>
              </div>
          </div>
          <h3 class="mt-5">Course Info</h3>
            <div class="table-responsive">
                <table class="table table-bordered table--info" id="dynamic_field">
                    <tr>
                        <td width="130px">
                            <div class="btn btn-block btn-success">Info 1</div>
                        </td>
                        <td>
                            <input type="text" name="info1" value="{{ $info['info1'] }}" class="form-control info1" />
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <td width="200px">
                                        <div class="btn btn-block btn-success">Info 1 Detail 1</div>
                                    </td>
                                    <td>
                                        <input type="text" value="{{ $info['info1Detail']->detail1 ?? '' }}" name="info1detail1" class="form-control info1detail1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btnsccess">Info 1 Detail 2</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info1detail2" value="{{ $info['info1Detail']->detail2 }}" class="form-control info1detail2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 1 Detail 3</div>
                                    </td>
                                    <td>
                                        <input type="text" value="{{ $info['info1Detail']->detail3 }}" name="info1detail3" class="form-control info1detail3" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="130px">
                            <div class="btn btn-block btn-success">Info 2</div>
                        </td>
                        <td>
                            <input type="text" name="info2" value="{{ $info['info2'] }}" class="form-control info2" />
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <td width="200px">
                                        <div class="btn btn-block btn-success">Info 2 Detail 1</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info2detail1" value="{{ $info['info2Detail']->detail1 }}" class="form-control info2detail1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 2 Detail 2</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info2detail2" value="{{ $info['info2Detail']->detail2 }}" class="form-control info2detail2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 2 Detail 3</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info2detail3" value="{{ $info['info2Detail']->detail3 }}" class="form-control info2detail3" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="130px">
                            <div class="btn btn-block btn-success">Info 3</div>
                        </td>
                        <td>
                            <input type="text" name="info3" value="{{ $info['info3'] }}" class="form-control info3" />
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <td width="200px">
                                        <div class="btn btn-block btn-success">Info 3 Detail 1</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info3detail1" value="{{ $info['info3Detail']->detail1 }}" class="form-control info3detail1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 3 Detail 2</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info3detail2" value="{{ $info['info3Detail']->detail2 }}" class="form-control info3detail2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 3 Detail 3</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info3detail3" value="{{ $info['info3Detail']->detail3 }}" class="form-control info3detail3" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="130px">
                            <div class="btn btn-block btn-success">Info 4</div>
                        </td>
                        <td>
                            <input type="text" name="info4" value="{{ $info['info4'] ?? '' }}" class="form-control info4" />
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <td width="200px">
                                        <div class="btn btn-block btn-success">Info 4 Detail 1</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info4detail1" value="{{ $info['info4Detail']->detail1 ?? '' }}" class="form-control info4detail1" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 4 Detail 2</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info4detail2" value="{{ $info['info4Detail']->detail2 ?? '' }}" class="form-control info4detail2" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn btn-block btn-success">Info 4 Detail 3</div>
                                    </td>
                                    <td>
                                        <input type="text" name="info4detail3" value="{{ $info['info4Detail']->detail3 ?? '' }}" class="form-control info4detail3" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
          <button class="btn btn-md btn-success btn-block mt-4">Update</button>
        </form>
      </div>

    </div>
    <!-- /.container-fluid -->

  
@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
  $(document).ready(function() {
    var errCount = 0;
    $('.info1detail1,.info1detail2,.info1detail3,.info1').bind("keyup keypress change", function(e) {
        const input1 = $('.info1detail1').val().length;
        const input2 = $('.info1detail2').val().length;
        const input3 = $('.info1detail3').val().length;
        const sumDtl1 = input1 + input2 + input3;
        const masterDetail1 = $('.info1').val().length;

        if (sumDtl1 > 0 && masterDetail1 === 0) {
            $('.info1.text-danger').remove()
            $('.info1detail1,.info1detail2,.info1detail3').unbind('keyup keypress change')
            $('.btn-save').attr("disabled", 'disabled')
            $('.info1').after(
                '<div class="info1 text-danger">Mohon diperbaiki info tidak boleh kosong jika detail terisi</div>'
            )
            errCount++
        } else {
            errCount--
            $('.info1.text-danger').remove()
            $('.info1detail1,.info1detail2,.info1detail3,.info1').bind('keyup keypress change')
        }

        if (errCount === 0) {
            $('.btn-save').removeAttr("disabled")
        }
    });
    $('.info2detail1,.info2detail2,.info2detail3,.info2').bind("keyup keypress change", function(e) {
        const input1 = $('.info2detail1').val().length;
        const input2 = $('.info2detail2').val().length;
        const input3 = $('.info2detail3').val().length;
        const sumDtl2 = input1 + input2 + input3;
        const masterDetail2 = $('.info2').val().length;
        if (sumDtl2 > 0 && masterDetail2 === 0) {
            $('.info2.text-danger').remove()
            $('.info2detail1,.info2detail2,.info2detail3').unbind('keyup keypress change')
            $('.btn-save').attr("disabled", 'disabled')
            $('.info2').after(
                '<div class="info2 text-danger">Mohon diperbaiki info tidak boleh kosong jika detail terisi</div>'
            )
            errCount++
        } else {
            errCount--
            $('.info2.text-danger').remove()
            $('.info2detail1,.info2detail2,.info2detail3,.info2').bind('keyup keypress change')
        }

        if (errCount === 0) {
            $('.btn-save').removeAttr("disabled")
        }
    });
    $('.info3detail1, .info3detail2, .info3detail3, .info3').bind("keyup keypress change", function(e) {
        const input1 = $('.info3detail1').val().length;
        const input2 = $('.info3detail2').val().length;
        const input3 = $('.info3detail3').val().length;
        const sumDtl3 = input1 + input2 + input3;
        const masterDetail3 = $('.info3').val().length;

        if (sumDtl3 > 0 && masterDetail3 === 0) {
            $('.info3.text-danger').remove()
            $('.info3detail1,.info3detail2,.info3detail3').unbind('keyup keypress change')
            $('.btn-save').attr("disabled", 'disabled')
            $('.info3').after(
                '<div class="info3 text-danger">Mohon diperbaiki info tidak boleh kosong jika detail terisi</div>'
            )
            errCount++
        } else {
            errCount--
            $('.info3.text-danger').remove()
            $('.info3detail1,.info3detail2,.info3detail3,.info3').bind('keyup keypress change')
        }

        if (errCount === 0) {
            $('.btn-save').removeAttr("disabled")
        }
    });
    $('.info4detail1, .info4detail2, .info4detail3, .info4').bind("keyup keypress change", function(e) {
        const input1 = $('.info4detail1').val().length;
        const input2 = $('.info4detail2').val().length;
        const input3 = $('.info4detail3').val().length;
        const sumDtl4 = input1 + input2 + input3;
        const masterDetail4 = $('.info4').val().length;

        if (sumDtl4 > 0 && masterDetail4 === 0) {
            $('.info4.text-danger').remove()
            $('.info4detail1,.info4detail2,.info4detail3').unbind('keyup keypress change')
            $('.btn-save').attr("disabled", 'disabled')
            $('.info4').after(
                '<div class="info4 text-danger">Mohon diperbaiki info tidak boleh kosong jika detail terisi</div>'
            )
            errCount++
        } else {
            errCount--
            $('.info4.text-danger').remove()
            $('.info4detail1,.info4detail2,.info4detail3,.info4').bind('keyup keypress change')
        }

        if (errCount === 0) {
            $('.btn-save').removeAttr("disabled")
        }
    });
});
</script>
@endpush