@extends('superadmin.layouts.admin')
@section('content')


<!-- Topbar -->

<!-- End of Topbar -->

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Content Row -->
    <div class="card py-3 px-3">
        <h1 class="my-3">Short Course Create</h1>
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <form action="{{ route('short.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name Course<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Information<span style="color: red">*</span></label>
                <textarea type="text" class="form-control" name="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="name">Thumbnail<span style="color: red">*</span></label>
                <input type="file" accept="image/*" class="form-control" name="thumbnail" required>
                <span>max file 300kb</span>
            </div>
            <h3>Course Info</h3>
            <div class="table-responsive">
                <table class="table table-bordered table--info" id="dynamic_field">
                    <tr>
                        <td width="10%">
                            <button type="button" name="add" id="add"
                                class="btn btn-block btn-success add--info--btn">Add
                                Info</button>
                        </td>
                        <td>
                            <input type="text" name="name[]" placeholder="Enter your Name"
                                class="form-control name_list" />
                            <table class="table table-bordered mt-3 table--detail" id="dynamic_field_info">
                                <tr>
                                    <td width="10%">
                                        <button type="button" name="add" id="add"
                                            class="btn btn-block btn-success add--detail--btn">Add
                                            Detail</button>
                                    </td>
                                    <td>
                                        <input type="text" name="name[]" placeholder="Enter your Name"
                                            class="form-control name_list" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <button class="btn btn-md btn-success btn-block">Save</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->


@include('superadmin.pages.user.create')
@endsection

@push('addon-script')
<script>
// function removeDetailRow(e) {
//     $(e).parent().parent().remove();
//     detail_counter--;
// }

// function removeInfoRow(e) {
//     $(e).parent().parent().remove();
//     info_counter--;
// }
// var max_info = 4; //maximum input boxes allowed
// var max_detail = 3; //maximum input boxes allowed
// var wrapper = $(".table--detail"); //Fields wrapper
// var add_detail_btn = $(".add--detail--btn"); //Add detail_btn ID
// var add_info_btn = $(".add--info--btn"); //Add detail_btn ID

// var detail_counter = 1; //initlal text box count
// var info_counter = 1; //initlal text box count

// $(add_detail_btn).click(function(e) { //on add input detail_btn click
//     e.preventDefault();
//     if (detail_counter < max_detail) { //max input box allowed
//         detail_counter++; //text box increment
//         $('.table--detail > tbody:last-child').append(
//             '<tr><td width="10%"><div onclick="removeDetailRow(this)" id="#remove--field" class="btn btn-block btn-success">Remove Detail</div></td><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td></tr>'
//         ); //add input box
//     }
// });

// $(add_info_btn).click(function(e) { //on add input detail_btn click
//     e.preventDefault();
//     if (info_counter < max_info) { //max input box allowed
//         info_counter++; //text box increment
//         $('.table--info > tbody:last-child').append(
//             '<tr><td width="10%"><div onclick="removeInfoRow(this)" id="#remove--field" class="btn btn-block btn-success">Remove Info</div></td> <td ><input type="text"name="name[]"placeholder="Enter your Name"class="form-control name_list"/><table class="table table-bordered mt-3 table--detail"id="dynamic_field_info" ><tr ><td width="10%" ><button type="button"name="add"id="add"class="btn btn-block btn-success add--detail--btn"> Add Detail </button> </td> <td ><input type="text"name="name[]"placeholder="Enter your Name"class="form-control name_list" / ></td> </tr> </table> </td> </tr>'
//         ); //add input box
//     }
// });
</script>
@endpush