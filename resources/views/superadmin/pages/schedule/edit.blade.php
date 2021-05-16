@extends('superadmin.layouts.admin')
@section('content')


<!-- Topbar -->

<!-- End of Topbar -->

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Content Row -->
    <div class="card py-3 px-3">
        @include('flashmessage.validation')
        @include('flashmessage.flash')
        <h1 class="mb-5">Schedules Edit</h1>
        
        <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-md-6">
                     <div class="form-group">
                        <label for="phase">Phase</label>
                        <input type="text" name="phase" value="{{ $schedule->phase }}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <div class="form-group">
                        <label for="phase">Date</label>
                        <input type="date" name="date" value="{{ $schedule->date }}" class="form-control">
                    </div>
                    </div>
                </div>
            </div>
           <div class="form-group">
               <label for="">Venue</label>
               <input type="text" name="venue" value="{{ $schedule->venue }}" class="form-control">
           </div>
           <div class="form-group">
               <label for="">Info</label>
               <input type="text"  name="info" value="{{ $schedule->info }}" class="form-control">
           </div>
           <button type="submit" class="btn btn-success btn-md btn-block">Submit</button>
        </form>

    </div>


</div>
<!-- /.container-fluid -->



@endsection

@push('addon-script')
<script>
// data table
$('#table-news-info').DataTable({
    responsive: true
});
// multi select
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
//modal
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>
@endpush
