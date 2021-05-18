@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Research')
@section('title-jumbotron', 'Research')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel
quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit,
tenetur!')
@include('icon')
<main>
    <div class="container-fluid">
        <div id="research" class="p-2">
            <div class="research__header">
                <h2>International Programs</h2>
                <h4>RESEARCH</h4>
            </div>
            <div class="research__mainContext">
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                    sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                    sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                    ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                    dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                    sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                </p>
            </div>
            <div class="research__subContext mt-4">
                <div class="container-fluid">
                   <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                @php $i=0; @endphp
                @forelse ($rgroups as $rgroup)
                @isset($rgroup->group)
                <button class="nav-link {{$i == 0 ? 'active' : ''}}" id="{{ Str::slug($rgroup->group) }}-tab"
                    data-bs-toggle="tab" data-bs-target="#{{ Str::slug($rgroup->group) }}" type="button" role="tab"
                    aria-controls="{{ Str::slug($rgroup->group) }}" aria-selected="{{ $i == 0 ? 'true' : '' }}">
                    {{ $rgroup->group }}
                </button>
                @php $i++; @endphp
                @endisset
                @empty
                <h3>Data not found</h3>
                @endforelse
            </div>
        </nav>
        <div class="tab-content">
            @php $i=0; @endphp
            @foreach ($rgroups as $rgroup)
            @isset($rgroup->group)
            <div class="tab-pane fade {{$i == 0 ? 'show active' : ''}}" id="{{ Str::slug($rgroup->group) }}"
                role="tabpanel" aria-labelledby="{{ Str::slug($rgroup->group) }}-tab">
                <div class="container-fluid">
                    @php $i = 0; @endphp
                    @foreach($researchs as $research)
                    @if($i<=3 && $rgroup->group == $research->group)
                        <div class="card">
                            <div class="row row-cols-md-2 align-items-center">
                                @if($i%2==0)
                                <div class="col-md-5">
                                    <div class="research__boxImg">
                                        <img src="{{Storage::url($research->articleDetail->thumbnail)}}" />
                                    </div>
                                </div>
                                @else
                                <div class="col-md-7">
                                    <div class="research__content">
                                        <h3>
                                            {{$research->articleDetail->title}}
                                        </h3>
                                        <p>
                                            {{$research->articleDetail->excerpt}}
                                        </p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                                @endif
                                @if($i%2!=0)
                                <div class="col-md-5">
                                    <div class="research__boxImg">
                                        <img src="{{Storage::url($research->articleDetail->thumbnail)}}" />
                                    </div>
                                </div>
                                @else
                                <div class="col-md-7">
                                    <div class="research__content">
                                        <h3>
                                            {{$research->articleDetail->title}}
                                        </h3>
                                        <p>
                                            {{$research->articleDetail->excerpt}}
                                        </p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                        @php $i++; @endphp
                        @endforeach
                </div>
            </div>
            @php $i++; @endphp
            @endisset
            @endforeach
        </div>
    </div>
</main>

@endsection