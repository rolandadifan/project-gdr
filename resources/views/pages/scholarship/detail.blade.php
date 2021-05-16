@extends('layouts.app')
@section('content')
@section('breadcrumb-title', $article->articleDetail->title )
@section('title-jumbotron', $article->articleDetail->title)
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
 <main>
        <div class="container-fluid">
            <div id="detailScholarship" class="p-2">
                <div class="detailScholarship__header">
                    <h2>International Programs</h2>
                    <h4>SCHOLARSHIPS</h4>
                </div>
                <div class="detailScholarship__context">
                    <div class="container-fluid">
                        <div
                            class="row rows-cols-1 g-3 justify-content-center align-items-center">
                            <div class="col">
                                <div class="card">
                                    <img src="{{ Storage::url($article->articleDetail->thumbnail) }}"
                                        class="card-img-top p-2 rounded" alt="scholarship">
                                    <div class="card-body">
                                       {!! $article->articleDetail->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
