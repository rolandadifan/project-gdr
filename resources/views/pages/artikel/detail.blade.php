@extends('layouts.app')
@section('content')
@section('breadcrumb-title', $article->articleDetail->title)
@section('title-jumbotron', $article->articleDetail->title)
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
    <div class="container-fluid">
        <div id="details" class="p-2">
            <div class="details__header">
                <h2>International Programs</h2>
                <h4>{{ $article->articleDetail->title }}</h4>
            </div>
            <div class="news__body">
                <div class="container">
                    <div class="details__body">
                        <div class="card">
                            <div class="card__boxImg">
                                <img src="{{ Storage::url($article->articleDetail->thumbnail) }}" alt="">
                            </div>
                            <div class="card__body">
                                <h5>{{ $article->articleDetail->title }}</h5>
                                <p>{!! $article->articleDetail->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </main>
  <main>
      @if ($article->articleType->name == 'news')
      <div class="container">
        <div id="details" class="p-2">
            <div class="details">
                <h5>More News</h5>
            </div>

            <div class="details__body">
                <!-- looping di BE -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center gx-2">

                    @forelse ($news as $item)
                    <div class="col">
                        <div class="card">
                            <div class="card__header">
                                <img class="card-img-top" src="{{ Storage::url($item->articleDetail->thumbnail) }}">
                            </div>
                            <div class="card-body">
                                <h5>{{ $item->articleDetail->title }}</h5>
                                <p class="card-text">{{ $item->articleDetail->excerpt }}</p>
                                <a href="{{ route('page.detail', $item->articleDetail->slug) }}">Read More...</a>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p class="text-center">no data found</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
      @else
      <div class="container">
        <div id="details" class="p-2">
            <div class="details">
                <h5>More Event</h5>
            </div>

            <div class="details__body">
                <!-- looping di BE -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center gx-2">

                    @forelse ($event as $ev)
                    <div class="col">
                        <div class="card">
                            <div class="card__header">
                                <img class="card-img-top" src="{{ Storage::url($ev->articleDetail->thumbnail) }}">
                            </div>
                            <div class="card-body">
                                <h5>{{ $ev->articleDetail->title }}</h5>
                                <p class="card-text">{{ $ev->articleDetail->excerpt }}</p>
                                <a href="{{ route('page.detail', $ev->articleDetail->slug) }}">Read More...</a>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p class="text-center">no data found</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
      @endif
</main>

<!-- end dinamis -->

@endsection
