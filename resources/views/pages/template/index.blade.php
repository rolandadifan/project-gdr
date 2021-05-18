@extends('layouts.app')
@section('content')
@section('breadcrumb-title', $article->articleDetail->title)
@section('title-jumbotron', $article->articleDetail->title)
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
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
<!-- end dinamis -->

@endsection