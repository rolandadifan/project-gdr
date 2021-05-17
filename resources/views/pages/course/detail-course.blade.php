@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Short Course')
@section('title-jumbotron', 'Short Course')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
<main>
        <section id="shortCourses" class="p-2">
            <div class="shortCourses__header">
              <h2>{{ $course->name }}</h2>
              <h4>Short Courses</h4>
            </div>
            <div class="shortCourses__mainContent">
              <div class="card">
                <div class="row row-cols-1 g-0 align-items-center">
                  <div class="col">
                    <div class="shortCourses__boxImg">
                      <img
                        src="{{ asset(Storage::url($course->courseDetail->thumbnail)) }}"
                        alt="Basketball Park"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="shortCourses__mainContent--description">
                      <h2>{{ $course->name }}</h2>
                      <p>
                       {{ $course->courseDetail->content }}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
              <!-- accordion -->
              <div class="accordion__courseShow">
                <div class="container">
                  <div class="row row-cols-lg-2 row-cols-1 g-2">
                    {{-- usingg loop --}}
                   {{-- @php
                    $courseinfo = json_decode( $courseDetail->info, true);
                  @endphp
                  @foreach ($courseinfo as $info)
                  <textarea type="text" class="form-control" name="info[]">{{ $info }} </textarea>
                  @endforeach --}}
                  @foreach ($course->courseDetail->infos as $info)
                  @isset($info)
                  @php
                      $infos = json_decode($info->info)
                  @endphp
                  <div class="col">
                    <div class="accordion__content">
                      <h2>{{ strtoupper($info->title) ?? '' }}</h2>
                        <ul>
                          @isset($infos->detail1)
                          <li>
                            {{ $infos->detail1 }}
                          </li>
                          @endisset
                          @isset( $infos->detail2)
                          <li>
                            {{ $infos->detail2 }}
                          </li>
                          @endisset
                          @isset( $infos->detail3)
                          <li>
                            {{ $infos->detail3 }}
                          </li>
                          @endisset
                        </ul>
                    </div>
                  </div>
                  @endisset
                  @endforeach
                  </div>

                  <button class="primary__button btn">Apply</button>
                </div>
                </div>
                <button class="accordion__course">
                  <i class="bi bi-caret-down-fill"></i>
                </button>
              </div>
            <div class="shortCourses__context">
              <!-- looping for more short course -->
              <div class="splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    @foreach ($courses as $itm)
                    <li class="splide__slide">
                      <a href="{{ route('scourse.detail', $itm->slug) }}">
                        <div class="card">
                          <img
                            src="{{ asset(Storage::url($itm->courseDetail->thumbnail)) }}"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <h5 class="card-title">{{ $itm->name }}</h5>
                          </div>
                        </div>
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <!-- end looping -->
            </div>
          </section>
    </main>
    
@endsection
