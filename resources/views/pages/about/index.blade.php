@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'About Gunadarma')
@section('title-jumbotron', 'About Gunadarma')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
  <main>
    <div class="container-fluid">
        <div id="aboutGundar" class="p-2">
            <div class="aboutGundar__header">
                <h2>International Programs</h2>
                <h4>About Gunadarma</h4>
            </div>
            <div class="aboutGundar__body">
                <div class="container">
                <div class="row row-cols-md-2 row-cols-1 g-lg-0 align-items-center">
                     @php
                       if($about){
                           $abouts = json_decode($about->value);
                       }else {
                           $abouts = '';
                       }
                    @endphp
                    <div class="col">
                    <p>
                        {{ $abouts ? $abouts->excerpt : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquam ad distinctio voluptatibus autem. Asperiores, dolor. Distinctio sunt repudiandae maiores facilis perspiciatis, iusto minima repellat laborum. Sapiente ullam sint placeat.
                        Libero quia recusandae asperiores. Laborum ad alias possimus explicabo eum illum fugit omnis rerum sed quasi velit aliquid ipsa provident ab delectus, culpa, libero ex, dignissimos dolorum? Incidunt, velit repellat.
                        Animi pariatur deleniti eum laboriosam, tempore omnis accusamus eius ab hic quae error natus sint repudiandae, nesciunt assumenda nisi adipisci rem commodi consequatur dignissimos atque ut! Laudantium quidem exercitationem libero!'}}
                    </p>
                    </div>
                    <div class="col">
                    <div class="aboutGundar__boxImg">
                        <img src="{{ !$about || $about->thumbnail == null  ? asset('assets/images/pict.png')  :  Storage::url($about->thumbnail) }}" alt="Gunadarma" />
                    </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <p>
                           {!! $abouts ? $abouts->content : ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi doloribus sunt tempore, quidem maiores porro expedita iste, quis ipsum, possimus saepe consectetur corporis temporibus reprehenderit cupiditate ducimus laboriosam optio voluptates.
                            Iusto sunt rem aut commodi facilis in sit, officiis odio asperiores! Sapiente suscipit sequi consequuntur nam nulla illum possimus! Consequuntur consectetur quod ea, hic obcaecati totam alias quasi quam amet?
                            Quos ipsa iure totam, architecto minima ullam ut! Debitis placeat corrupti in explicabo asperiores, doloremque aut, aliquam, eius vitae error tempore aperiam ea reprehenderit impedit officia minus voluptatem eligendi! Animi?
                            Debitis architecto modi, placeat perferendis quo optio. Facilis ad aspernatur impedit nulla magni ex, molestias omnis sint, dolorum aperiam facere, fugiat nostrum nisi consequatur ipsa in! Aperiam accusantium distinctio earum?
                            Magni unde ad eveniet voluptates doloribus obcaecati nisi alias, explicabo beatae quasi commodi nihil quaerat enim quidem quisquam sunt reiciendis repellendus atque saepe quos ea laudantium. Esse animi sequi veniam!
                            Amet repudiandae voluptas, quidem sunt blanditiis harum quaerat nesciunt dicta aut maiores ducimus sed saepe neque officia, cum eaque dolor mollitia esse sint distinctio explicabo. Aspernatur debitis expedita esse eum.
                            Temporibus beatae similique minima voluptatum, animi dolorem, deleniti ea laborum fugiat odio, sint sapiente nam suscipit blanditiis. Animi incidunt corporis at veniam natus blanditiis eligendi error iure necessitatibus. Ratione, ullam.
                            Ad, voluptate iste numquam qui quae magnam odio molestiae consectetur perferendis explicabo quo porro minus, ipsum, repellat illum? Expedita aut hic nesciunt voluptatibus quis unde reiciendis. Debitis, facere quas? Aspernatur!' !!}
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!-- main content news  -->
    <main>
        <div class="container">
            <div id="aboutGundarNews" class="p-2">
                <div class="aboutGundarNews__header">
                    <h2>International Programs</h2>
                    <h4>News</h4>
                </div>

                <div class="aboutGundarNews__body">
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
                            <p class="text-center">No Data Found</p>
                        @endforelse
                       
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- main content event --><!-- main content news  -->
    <!-- main content event -->
    <main>
        <div class="container">
            <div id="aboutGundarEvent" class="p-2">
                <div class="aboutGundarEvent__header">
                    <h2>International Programs</h2>
                    <h4>Event</h4>
                </div>

                <div class="aboutGundarEvent__body">
                    <!-- looping di BE -->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center gx-2">
                        @forelse ($event as $items)
                        <div class="col">
                            <div class="card">
                                <div class="card__header">
                                    <img class="card-img-top" src="{{ Storage::url($items->articleDetail->thumbnail) }}">
                                </div>
                                <div class="card-body">
                                    <h5>{{ $items->articleDetail->title }}</h5>
                                    <p class="card-text">{{ $items->articleDetail->excerpt }}</p>
                                    <a href="{{ route('page.detail', $items->articleDetail->slug) }}">Read More...</a>
                                </div>
                            </div>
                        </div>
                            
                        @empty
                             <p class="text-center">No Data Found</p>
                        @endforelse
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
