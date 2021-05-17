@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Scholarships')
@section('title-jumbotron', 'Scholarships')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
        <div class="container-fluid">
            <div id="listScholarship" class="p-2">
                <div class="listScholarship__header">
                    <h2>International Programs</h2>
                    <h4>SCHOLARSHIPS</h4>
                </div>
                <div class="listScholarship__subHeader">
                    <h5>Which scholarship is for me?</h5>
                    <p>Find a scholarship that works for you. Whether it’s recognition of your academic achievements or a   chance to make university a reality, there’s a Deakin scholarship that can help you on your way to your dream degree.</p>
                    <p class="mt-3">Check through the options to find a scholarship for you.</p>
                </div>
                <div class="listScholarship__context">
                    <div class="container-fluid">
                        <div class="row rows-cols-md-3 rows-cols-sm-2 rows-cols-1 g-3 justify-content-center align-items-center">
                            @forelse ( $article as $item)
                            <div class="col">
                                <div class="card">
                                    <img src="{{ Storage::url($item->articleDetail->thumbnail) }}" class="card-img-top p-2 rounded" alt="scholarship">
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $item->articleDetail->title }}</h5>
                                      <div class="d-flex align-items-baseline card__calender">
                                        <i class="far fa-calendar-alt"></i>
                                        <p class="px-2">{{ date('F d, Y, l', strtotime($item->created_at)) }}</p>
                                      </div>
                                      <p class="card-text">{{ $item->articleDetail->excerpt }}</p>
                                      <a href="{{ route('scholarship.detail', $item->articleDetail->slug) }}" class="scholarship__readMore">Read more..</a>
                                    </div>
                                  </div>
                            </div>
                            @empty
                                <h2 class="text-center">Data Not Found</h2>
                            @endforelse

                        </div>
                    </div>
                </div>
                <nav aria-label="paginationCourses" class="mt-3">
                    <ul class="pagination justify-content-center">
                        {{ $article->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                </nav>
            </div>
        </div>

        <!-- latest event -->
     <div class="container-fluid my-5 latestNews p-4">
        <div class="latestNews__header mb-3">
            <h4>Latest Event</h4>
        </div>
        <div class="row rows-cols-1 rows-cols-md-2 latestNews__content">
            @forelse ($articles as $ar)
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
    </main>
@endsection
