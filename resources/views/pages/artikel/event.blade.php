@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Event')
@section('title-jumbotron', 'Event')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
<main>
    <div class="container-fluid">
        <div id="news" class="p-2">
            <div class="news__header">
                <h2>International Programs</h2>
                <h4>Events</h4>
            </div>
            <div class="news__body">
                <div class="container">
                    <!-- looping for more news -->
                    <!-- Swiper -->
                    <div class="swiper-container" id="swiper-container">
                        <div class="swiper-wrapper">
                            @forelse ($event as $item)
                            <div class="swiper-slide">
                                <div class="row contentNews">
                                    <div class="col">
                                        <div class="newsContent__boxImage">
                                            <img src="{{ Storage::url($item->articleDetail->thumbnail) }}" alt="">
                                        </div>
                                        <div class="newsContent__body">
                                            <h5>{{ $item->articleDetail->title }}</h5>
                                            <p>{{ $item->articleDetail->excerpt }}</p>

                                            <a href="{{ route('page.detail', $item->articleDetail->slug) }}">Read more...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <p class="text-center">No Data Found</p>
                            @endforelse

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- end looping -->
                    </div>
                </div>
            </div>
        </div>
        <!-- berita lainnya -->
    <main class="beritaLainnya">
        <div class="container">
            <div class="beritaLainnya__header">
                <h5>Berita Lainnya</h5>
            </div>
            <div class="container-fluid beritaLainnya__body">
                @forelse ($eventAll as $event)
                    
                <div class="card">
                    <div class="row row-cols-md-2 align-items-center">
                    <div class="col-md-5">
                        <div class="beritaLainnya__boxImg">
                        <img src="{{ Storage::url($event->articleDetail->thumbnail) }}" />
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="beritaLainnya__content">
                        <h3>
                            {{ $event->articleDetail->title }}
                        </h3>
                        <p>
                            {{ $event->articleDetail->excerpt }}
                        </p>
                        <a href="{{ route('page.detail', $event->articleDetail->slug) }}">Read More...</a>
                        </div>
                    </div>
                    </div>
                </div>
                @empty
                    <p class="text-center">No Data Found</p>
                @endforelse
            </div>
        </div>
    </main>
    {{ $eventAll->links() }}

     <!-- latest event -->
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
    </main>

@endsection
