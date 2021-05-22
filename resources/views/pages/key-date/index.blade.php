@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Key Dates')
@section('title-jumbotron', 'Key Dates')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="keyDates" class="p-2">
                <div class="keyDates__header">
                    <h2>International Programs</h2>
                    <h4>KEY DATES</h4>
                </div>
                <div class="keyDates__contents">
                    <div class="container">
                        <div class="keyDates__body">
                            <div class="keyDates__content">
                                <div class="keyDates__content__header">
                                    <h5>Application Dates</h5>
                                    <p>We have a number of different study periods. Most courses are offered through our
                                        trimester study system. With three trimesters, the next intake is never far
                                        away.</p>
                                    <p>Applications are generally open during the following periods (including non-award
                                        and incoming cross institutional applications), but not all courses are open at
                                        each application intake. Please check the relevant course page for full details.
                                    </p>
                                </div>
                                <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>Application Dates</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table id="table-key-date" class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Study Period</th>
                                                                        <th scope="col">Application Open</th>
                                                                        <th scope="col">Application Close</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($keys as $item)
                                                                    <tr>
                                                                        <td class="first__td">{{ $item->period }}</td>
                                                                        <td>{{ ucfirst($item->open_status) }}</td>
                                                                        <td>{{ date('d/m/Y', strtotime($item->close_date)) }}</td>
                                                                    </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td>No Data Here</td>
                                                                        </tr>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="keyDates__content">
                                <div class="keyDates__content__header">
                                    <h5>Study periods</h5>
                                    <p>Most of our courses and units are studied in our trimester study schedule. To give you an idea of when you’d be studying, an outline of the upcoming trimester dates is below.
                                    </p>
                                </div>
                                <!-- table looping sejumlah db di trimester berada -->
                                @forelse ($keys as $data)
                                    <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>{{ $data->period }}</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Activities</th>
                                                                        <th scope="col">Dates</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- looping data from db -->
                                                                    @forelse ($data->KeyDetail as $info)
                                                                    <tr>
                                                                        <td class="first__td">{{ $info->activities }}</td>
                                                                        <td>{{ $info->date }}</td>
                                                                    </tr>
                                                                    @empty
                                                                        <tr>
                                                                            <td class="bg-light" colspan="2">Coming Soon</td>
                                                                        </tr>
                                                                    @endforelse
                                                                    <!-- end looping -->
                                                                    <tr>
                                                                        <td class="bg-light" colspan="2">Applications now {{ $data->open_status }} </td>
                                                                    </tr>
                                                                    <!-- check jika key actives, application open, else if application close, else coming soon  -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <p class="text-center">No Data Here</p>
                                @endforelse
                                
                            
                                  
                                {{-- <div class="tableApplication my-5">
                                    <div class="app__content">
                                        <div class="container">
                                            <div class="row align-items-center p-0">
                                                <div class="col">
                                                    <div class="app__table">
                                                        <div class="table__app">
                                                            <p>Trimester 3, 2021</p>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table text-center">
                                                                <thead>
                                                                    <!-- <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col"></th>
                                                                    </tr> -->
                                                                </thead>
                                                                <tbody>
                                                                    <!-- looping data from db -->
                                                                    <!-- end looping -->

                                                                    <!-- check jika key actives, application open, else if application close, else coming soon  -->
                                                                    <tr>
                                                                        <td class="bg-light" colspan="2">Coming Soon</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- end looping -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <!-- latest event -->
    <div class="container-fluid my-5 latestNews p-4">
        <div class="latestNews__header mb-3">
            <h4>Latest Event</h4>
        </div>
        <div class="row rows-cols-1 rows-cols-md-2 latestNews__content">
            @forelse ($article as $ar)
            <div class="col">
                <div class="latestNews__col--header">
                    <h6>{{ $ar->group }}</h6>
                    <p>{{ $ar->articleDetail->title }}</p>
                </div>
                <p>{{$ar->articleDetail->excerpt}}</p>

                <a href="{{ route('page.detail',$ar->articleDetail->slug ) }}">Read more..</a>
            </div>
            @empty
                 <p class="text-center">No Data Found</p>
            @endforelse
           
        </div>
    </div>
@endsection
@push('addon-script')
{{-- data table --}}
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js">
  </script>

<script>
// data table
$('#table-key-date').DataTable({
    responsive: true,
    searching: false,
    lengthChange: false
});

</script>
@endpush
