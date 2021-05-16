@extends('layouts.life-campus')
@section('content')
@section('breadcrumb-title', 'Student Life')
@section('title-jumbotron', 'Student Life')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
 <main>
        <div class="container">
            <div id="lifeStudent" class="p-2">
                <div class="lifeStudent__header">
                    <h2>International Programs</h2>
                    <h4>STUDENT LIFE</h4>
                </div>

                <!-- card profile -->
                <div class="circleProfile">
                    <div class="circleProfile__Header">
                        <h5>Student life at Gunadarma</h5>
                    </div>
                    <div class="circleProfile__body">
                        <div class="container">
                            <div class="row justify-content-center row-cols-lg-3 row-cols-md-2 row-cols-1 gx-5">
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="{{ !$slpOne || $slpOne->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($slpOne->thumbnail) }}">
                                    </div>
                                    @php
                                    if($slpOne){
                                            $slpones = json_decode($slpOne->value);
                                        }else {
                                            $slpones = '';
                                        }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $slpones ? $slpones->title : 'Organization'    }}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{ $slpones ? $slpones->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.'}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                         <img class="circleProfile__image" src="{{ !$slpTwo || $slpTwo->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($slpTwo->thumbnail) }}">
                                    </div>
                                    @php
                                    if($slpTwo){
                                            $slpTwos = json_decode($slpTwo->value);
                                        }else {
                                            $slpTwos = '';
                                        }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $slpTwos ? $slpTwos->title : 'Clubs and societies'    }}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{ $slpTwos ? $slpTwos->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.'    }}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="{{ !$slpThree || $slpThree->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($slpThree->thumbnail) }}">
                                    </div>
                                     @php
                                        if($slpThree){
                                                $slpThrees = json_decode($slpThree->value);
                                            }else {
                                                $slpThrees = '';
                                            }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $slpThrees ? $slpThrees->title : 'Opportunity to Work'    }}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{ $slpThrees ? $slpThrees->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.'    }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- custom card content -->
                <div class="customCard__contents">
                    <div class="card">
                        <div class="row row-cols-1 g-0 align-items-start">
                            <div class="col-md-5">
                            <div class="customCard__boxImg">
                                <img
                                src="{{ !$sio || $sio->thumbnail == null ? asset('assets/images/gunadarma-life.png') : Storage::url($sio->thumbnail) }}"
                                alt="Basketball Park"
                                />
                            </div>
                            </div>
                            <div class="col-md-7">
                            <div class="customCard__content">
                                 @php
                                  if($sio){
                                        $sios = json_decode($sio->value);
                                    }else {
                                        $sios = '';
                                    }
                                @endphp
                                <h2>{{ $sios ? $sios->title : 'Campus H'    }}</h2>
                                <p>{{ $sios ? $sios->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!'}}</p>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="infoCard mt-5">
                    <div class="row row-cols-1 row-cols-lg-2 justify-content-center gx-3">
                        <div class="col">
                             @php
                                  if($sithree){
                                        $sithrees = json_decode($sithree->value);
                                    }else {
                                        $sithrees = '';
                                    }
                            @endphp
                            <div class="infoCard__header">
                                <h5>{{ $sithrees ? $sithrees->title : 'Library' }}</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>{{ $sithrees ? $sithrees->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.
                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?
                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum.' }}
                                </p>
                            </div>
                        </div>
                        <div class="col">
                             @php
                                  if($sif){
                                        $sifs = json_decode($sif->value);
                                    }else {
                                        $sifs = '';
                                    }
                            @endphp
                            <div class="infoCard__header">
                                <h5>{{ $sifs ? $sifs->title : 'The Integrated Laboratory' }}</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>{{ $sifs ? $sifs->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit non, inventore expedita ex accusantium tempora doloribus, obcaecati repudiandae, sequi velit esse. Asperiores facilis perspiciatis eaque consectetur delectus numquam similique pariatur.
                                    Ipsam culpa sunt officia. Facere culpa sed velit illum incidunt sint dolore nisi recusandae ex amet omnis error ad, reprehenderit blanditiis rerum animi ea! Suscipit beatae eius magnam illo maiores?
                                    Consequuntur quas molestias dolores itaque accusamus maiores, assumenda obcaecati commodi repellendus error sint temporibus mollitia. Quam possimus repudiandae alias facere cumque iure ut vel aut delectus, quisquam tempore amet eum.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customCard__contents">
                    <div class="card">
                        <div class="row row-cols-1 g-0 align-items-start">
                            <div class="col-md-5">
                            <div class="customCard__boxImg">
                                <img
                                src="{{ !$sit || $sit->thumbnail == null ? asset('assets/images/gunadarma-life.png') : Storage::url($sit->thumbnail) }}"
                                alt="Basketball Park"
                                />
                            </div>
                            </div>
                            <div class="col-md-7">
                            <div class="customCard__content">
                                @php
                                  if($sit){
                                        $sits = json_decode($sit->value);
                                    }else {
                                        $sits = '';
                                    }
                                @endphp
                                <h2>{{ $sits ? $sits->title : 'Sport Center'    }}</h2>
                                <p>{{ $sits ? $sits->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!'    }}</p>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>
                <div class="infoCard mt-5">
                    <div class="row row-cols-1 row-cols-lg-2 justify-content-center gx-3">
                        <div class="col">
                            @php
                                  if($siv){
                                        $sivs = json_decode($siv->value);
                                    }else {
                                        $sivs = '';
                                    }
                            @endphp
                            <div class="infoCard__header">
                                <h5>{{ $sivs ? $sivs->title : 'Getting to Campus' }}</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>{{ $sivs ? $sivs->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!' }}</p>
                            </div>
                        </div>
                        <div class="col">
                             @php
                                  if($six){
                                        $sixs = json_decode($six->value);
                                    }else {
                                        $sixs = '';
                                    }
                            @endphp
                            <div class="infoCard__header">
                                <h5>{{ $sixs ? $sixs->title : 'Parking' }}</h5>
                            </div>
                            <div class="infoCard__body">
                                <p>{{ $sixs ? $sixs->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!' }}</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>

     @include('include.thumbnail-life')
     <main>
        <div class="container">
            <div id="whyStudy" class="p-2">
                <div class="whyStudy__info">
                     @php
                                  if($sis){
                                        $siss = json_decode($sis->value);
                                    }else {
                                        $siss = '';
                                    }
                            @endphp
                    <div class="whyStudy__info--header">
                        <h5>{{ $siss ? $siss->title : 'Life At Gunadarma' }}</h5>
                    </div>
                    <div class="whyStudy__info--body">
                        <p>{{ $siss ? $siss->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!' }}</p>
                    </div>
                </div>

                <div class="cardVideo">
                         @php
                                  if($sie){
                                        $sies = json_decode($sie->value);
                                    }else {
                                        $sies = '';
                                    }
                            @endphp
                    <div class="cardVideo__header">
                        <h5>{{ $sies ? $sies->title : 'Gunadarma University Student Community' }}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>{{ $sies ? $sies->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!' }}</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="{{!$sie || $sie->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($sie->thumbnail) }}" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardVideoReverse">
                    @php
                                  if($sin){
                                        $sins = json_decode($sin->value);
                                    }else {
                                        $sins = '';
                                    }
                            @endphp
                    <div class="cardVideo__header">
                        <h5>{{ $sins ? $sins->title : 'Career Planning' }}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>{{ $sins ? $sins->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                                dolor excepturi quibusdam eveniet veniam accusantium impedit
                                harum corrupti consequuntur perspiciatis repellendus velit
                                odio!' }}</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="{{!$sin || $sin->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($sin->thumbnail) }}" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

     

@endsection
