@extends('superadmin.layouts.admin')
@section('content')


<!-- Topbar -->

<!-- End of Topbar -->

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Content Row -->
    <a class="btn btn-primary mb-3" href="{{ route('key-date.index') }}">Back To List</a>
    <div class="card py-3 px-3">
        <h1 class="my-3">Key Date Create</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <form action="{{ route('key-date.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Period<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="period" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Close Date<span style="color: red">*</span></label>
                        <input type="date" class="form-control" name="close_date" id="" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Is_Open<span style="color: red">*</span></label>
                <select class="form-control" name="open_status" id="exampleFormControlSelect1" required>
                    <option value="close">Close</option>
                    <option value="open">Open</option>
                </select>
            </div>

            <h4 class="mt-3 mb-3">Key Date Detail</h4>
            <button type="button" class="btn btn-info btn-sm mb-3" id="add">Add More Detail</button>
                <table class="table" style="border-style:hidden" id="more-detail">  
                    <tr>
                        <td>Title</td>
                        <td>Date</td>
                        <td>Activities</td>
                    </tr>
                    <tr> 
                        <div class="row">
                            <div class="col-md-4">
                                <td><input type="text" name="title[]" placeholder="Enter title" class="form-control name_list" /></td>  
                            </div>
                            <div class="col-md-3">
                                <td><input type="text" name="date[]" placeholder="Enter Date" class="form-control name_list" /></td> 
                            </div>
                            <div class="col-md-5">
                                <td><input type="text" name="activities[]" placeholder="Enter Activities" class="form-control name_list" /></td> 
                            </div>
                        </div>
                    </tr>  
                </table>  
            <button class="btn btn-md btn-success btn-block btn-save" type="submit">Save</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->


@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
    var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#more-detail').append(`
            <tr> 
                <div class="row">
                    <div class="col-md-4">
                        <td><input type="text" name="title[]" placeholder="Enter title" class="form-control name_list" /></td>  
                    </div>
                    <div class="col-md-3">
                        <td><input type="text" name="date[]" placeholder="Enter Date" class="form-control name_list" /></td> 
                    </div>
                    <div class="col-md-5">
                        <td>
                            <input type="text" name="activities[]" placeholder="Enter Activities" class="form-control name_list" /></td> 
                        </div>
                    </div>
                        <td><button type="button"  class="btn btn-danger remove-tr">Remove</button></td>  
                    </tr>  
           `);  
      });
    $(document).on('click', '.remove-tr', function(){  

    $(this).parents('tr').remove();

    });   
</script>
@endpush
