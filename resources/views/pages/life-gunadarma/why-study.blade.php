@extends('layouts.life-campus')
@section('content')
@section('breadcrumb-title', 'Why Study with Gunadarma')
@section('title-jumbotron', 'Why Study with Gunadarma')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
 <main>
        <div class="container">
            <div id="whyStudy" class="p-2">
                <div class="whyStudy__header">
                    <h2>International Programs</h2>
                    <h4>WHY STUDY WITH GUNADARMA</h4>
                </div>
                <div class="videoContent">
                    <!-- <div class="ratio ratio-16x9">
                        <iframe class="youtube__content" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                    </div> -->
                    <video class="youtube__content" src="{{ !$sneakpeak || $sneakpeak->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($sneakpeak->thumbnail) }}" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. </video>
                </div>
                <div class="circleProfile">
                    <div class="circleProfile__Header">
                        <h5>Choose Gunadarma</h5>
                    </div>
                    <div class="circleProfile__body">
                        <div class="container">
                            <div class="row justify-content-center row-cols-lg-3 row-cols-md-2 row-cols-1 gx-5">
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="{{ !$chooseOne || $chooseOne->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($chooseOne->thumbnail) }}">
                                    </div>
                                     @php
                                        if($chooseOne){
                                                $chooseones = json_decode($chooseOne->value);
                                            }else {
                                                $chooseones = '';
                                            }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $chooseones ? $chooseones->title : 'WorkSpace Learning'}}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{ $chooseones ? $chooseones->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.' }}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                         <img class="circleProfile__image" src="{{ !$chooseTwo || $chooseTwo->thumbnail == null ? asset('assets/images/circle_image2.png') : Storage::url($chooseTwo->thumbnail) }}">
                                    </div>
                                    @php
                                        if($chooseTwo){
                                                $chooseTwos = json_decode($chooseTwo->value);
                                            }else {
                                                $chooseTwos = '';
                                            }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $chooseTwos ? $chooseTwos->title : 'Supporting Your Study'}}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{ $chooseTwos ? $chooseTwos->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.' }}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                         <img class="circleProfile__image" src="{{ !$chooseThree || $chooseThree->thumbnail == null ? asset('assets/images/circle_image2.png') : Storage::url($chooseThree->thumbnail) }}">
                                    </div>
                                     @php
                                        if($chooseThree){
                                                $chooseThrees = json_decode($chooseThree->value);
                                            }else {
                                                $chooseThrees = '';
                                            }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $chooseThrees ? $chooseThrees->title : 'Building Your Career'}}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{ $chooseThrees ? $chooseThrees->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.' }}</p>
                                    </div>
                                </div>
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
                                  if($lat){
                                        $lats = json_decode($lat->value);
                                    }else {
                                        $lats = '';
                                    }
                            @endphp
                    <div class="whyStudy__info--header">
                        <h5>{{ $lats ? $lats->title :  'Life At Gunadarma' }}</h5>
                    </div>
                    <div class="whyStudy__info--body">
                        <p>
                            {{ $lats ? $lats->content :'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt officia dignissimos pariatur tempora illo unde a labore blanditiis exercitationem commodi, facilis ex deleniti iste possimus quam sed esse expedita. Dolores?
                            Maiores delectus dicta mollitia a, laborum minus iste illum ullam, impedit autem, praesentium eum? Ipsa quidem doloremque at quia ratione ullam maxime, odit iusto obcaecati accusamus laudantium, maiores placeat quam!
                            Sequi quam labore illo, quisquam consequuntur excepturi deleniti veritatis consequatur. Aperiam doloribus esse a ullam modi minima minus temporibus tempore dicta, quibusdam rem distinctio dignissimos facere nulla dolore voluptatibus dolor?
                            Facere cum dolorem iure totam eum tenetur explicabo quos iusto veritatis animi ab dolor distinctio architecto enim quisquam, magni modi dignissimos doloremque quas eius itaque beatae esse aliquam nesciunt! Quo.
                            Asperiores quis, modi suscipit illo et officiis totam, optio explicabo reprehenderit eligendi eum ducimus voluptatum obcaecati minima eos ipsam numquam sed fugiat. Error blanditiis earum hic omnis cum perspiciatis quae?'}}
                        </p>
                    </div>
                </div>

                <div class="cardVideo">
                     @php
                                  if($wio){
                                        $wios = json_decode($wio->value);
                                    }else {
                                        $wios = '';
                                    }
                            @endphp
                    <div class="cardVideo__header">
                        <h5>{{ $wios ? $wios->title :  'Extracurricular' }}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>{{ $wios ? $wios->content :  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque? Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet. Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore.' }}</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="{{!$wio || $wio->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($wio->thumbnail) }}" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardVideoReverse">
                     @php
                                  if($wit){
                                        $wits = json_decode($wit->value);
                                    }else {
                                        $wits = '';
                                    }
                            @endphp
                    <div class="cardVideo__header">
                        <h5>{{ $wits ? $wits->title :  'Campus Locations' }}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>{{ $wits ? $wits->content :  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque? Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet. Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore.' }}</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="{{!$wit || $wit->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($wit->thumbnail) }}" controls> 
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
