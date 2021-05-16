@extends('layouts.life-campus')
@section('content')
@section('breadcrumb-title', 'Graduations')
@section('title-jumbotron', 'Graduations')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
 <main>
        <div class="container">
            <div id="graduation" class="p-2">
                <div class="graduation__header">
                    <h2>International Programs</h2>
                    <h4>GRADUATIONS</h4>
                </div>
                <div class="videoContent">
                    <!-- <div class="ratio ratio-16x9">
                        <iframe class="youtube__content" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                    </div> -->
                    <video class="youtube__content" src="{{ !$spg || $spg->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($spg->thumbnail) }}" controls> Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. </video>
                </div>
                <div class="circleProfile">
                    <div class="circleProfile__body">
                        <div class="container">
                            <div class="row justify-content-center row-cols-lg-3 row-cols-md-2 row-cols-1 gx-5">
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="{{ !$gio || $gio->thumbnail == null ? asset('assets/images/circle_image2.png') : Storage::url($gio->thumbnail) }}">
                                    </div>
                                     @php
                                        if($gio){
                                                $gios = json_decode($gio->value);
                                            }else {
                                                $gios = '';
                                            }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $gios ? $gios->title : 'WorkSpace Learning'    }}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{  $gios ? $gios->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.'}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="{{ !$git || $git->thumbnail == null ? asset('assets/images/circle_image2.png') : Storage::url($git->thumbnail) }}">
                                    </div>
                                    @php
                                    if($git){
                                            $gits = json_decode($git->value);
                                        }else {
                                            $gits = '';
                                        }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $gits ? $gits->title : 'WorkSpace Learning'    }}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{  $gits ? $gits->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.'}}</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circleProfile__boxImg">
                                        <img class="circleProfile__image" src="{{ !$githree || $githree->thumbnail == null ? asset('assets/images/circle_image.png') : Storage::url($githree->thumbnail) }}">
                                    </div>
                                    @php
                                    if($githree){
                                            $githrees = json_decode($githree->value);
                                        }else {
                                            $githrees = '';
                                        }
                                    @endphp
                                    <div class="circleProfile__title">
                                        <p>{{ $githrees ? $githrees->title : 'Building Your Career'    }}</p>
                                    </div>
                                    <div class="circleProfile__mainBody">
                                        <p>{{  $githrees ? $githrees->content : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt ea ullam est nihil vero modi facere impedit repellendus provident quas id qui, soluta reprehenderit esse. Doloribus labore tempore repellat beatae.'}}</p>
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
            <div id="graduation" class="p-2">
                <div class="graduation__info">
                     @php
                                  if($gif){
                                        $gifs = json_decode($gif->value);
                                    }else {
                                        $gifs = '';
                                    }
                            @endphp
                    <div lacss="graduation__info--header">
                        <h5>{{ $gifs ? $gifs->title : 'Graduations' }}</h5>
                    </div>
                    <div class="graduation__info--body">
                        <p>{{ $gifs ? $gifs->content : ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt officia dignissimos pariatur tempora illo unde a labore blanditiis exercitationem commodi, facilis ex deleniti iste possimus quam sed esse expedita. Dolores?
                            Maiores delectus dicta mollitia a, laborum minus iste illum ullam, impedit autem, praesentium eum? Ipsa quidem doloremque at quia ratione ullam maxime, odit iusto obcaecati accusamus laudantium, maiores placeat quam!
                            Sequi quam labore illo, quisquam consequuntur excepturi deleniti veritatis consequatur. Aperiam doloribus esse a ullam modi minima minus temporibus tempore dicta, quibusdam rem distinctio dignissimos facere nulla dolore voluptatibus dolor?
                            Facere cum dolorem iure totam eum tenetur explicabo quos iusto veritatis animi ab dolor distinctio architecto enim quisquam, magni modi dignissimos doloremque quas eius itaque beatae esse aliquam nesciunt! Quo.
                            Asperiores quis, modi suscipit illo et officiis totam, optio explicabo reprehenderit eligendi eum ducimus voluptatum obcaecati minima eos ipsam numquam sed fugiat. Error blanditiis earum hic omnis cum perspiciatis quae?' }}</p>
                    </div>
                </div>

                <div class="cardVideo">
                    @php
                                  if($giv){
                                        $givs = json_decode($giv->value);
                                    }else {
                                        $givs = '';
                                    }
                            @endphp
                    <div class="cardVideo__header">
                        <h5>{{ $givs ? $givs->title : 'Ceremony Video 2020' }}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>{{ $givs ? $givs->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque?
                            Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet.
                            Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore.' }}</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="{{!$giv || $giv->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($giv->thumbnail) }}" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cardVideoReverse">
                     @php
                                  if($gix){
                                        $gixs = json_decode($gix->value);
                                    }else {
                                        $gixs = '';
                                    }
                            @endphp
                    <div class="cardVideo__header">
                        <h5>{{ $gixs ? $gixs->title : 'Graduation Day at Gunadarma' }}</h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-12 cardVideo__contentLeft">
                            <p>{{ $gixs ? $gixs->content : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam esse repudiandae laudantium assumenda! Modi suscipit temporibus velit, perferendis adipisci quisquam voluptates magni odio animi ullam eos autem neque deleniti itaque?
                            Assumenda quae dolore numquam saepe nostrum perspiciatis fugiat soluta! Vel ipsam modi atque unde est adipisci suscipit harum! Pariatur quo nemo placeat officiis veritatis hic et optio molestiae consequuntur amet.
                            Commodi ducimus culpa minima id dicta, explicabo dolores molestiae in quis consectetur numquam magnam deserunt velit vitae sapiente doloribus itaque assumenda asperiores optio cupiditate consequatur ut quas? Doloremque, necessitatibus tempore.' }}</p>
                        </div>
                        <div class="col-md-5 col-12 cardVideo__contentRight">
                            <div class="cardVideo__contentBox">
                                <video class="cardVideo__content" src="{{!$gix || $gix->thumbnail == null ? 'https://archive.org/download/Popeye_forPresident/Popeye_forPresident_512kb.mp4' : Storage::url($gix->thumbnail) }}" controls> 
                                    Sorry, your browser doesn't support HTML5 <code>video</code>, but you can download this video from the <a href="https://archive.org/details/Popeye_forPresident" target="_blank">Internet Archive</a>. 
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tableSection">
                    <div class="tableApplication">
                        <div class="app__content">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="app__table">
                                            <h5>Graduations Schedule</h5>
                                            <div class="table__app">
                                                <p>Schedule</p>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="47%" scope="col">Phase</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Venue</th>
                                                            <th scope="col">Registration</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($schedule as $item)
                                                        <tr>
                                                            <td class="first__td">{{ $item->phase }}</td>
                                                            <td>{{ $item->date }}</td>
                                                            <td>{{ $item->venue }}</td>
                                                            <td>{{ $item->info }}</td>
                                                        </tr>
                                                        @empty
                                                            <td class="text-center">No Data Here</td>
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
            </div>
        </div>
    </main>
     

@endsection
