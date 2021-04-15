@extends('layouts.app')
@section('content')
@include('include.jumbotron')
@include('icon')
<main>
        <section id="shortCourses" class="p-2">
            <div class="shortCourses__header">
              <h2>{{ $course->courseName }}</h2>
              <h4>Short Courses</h4>
            </div>
            <div class="shortCourses__mainContent">
              <div class="card">
                <div class="row row-cols-1 g-0 align-items-center">
                  <div class="col">
                    <div class="shortCourses__boxImg">
                      <img
                        src="{{ asset(Storage::url($course->thumbnail)) }}"
                        alt="Basketball Park"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="shortCourses__mainContent--description">
                      <h2>{{ $course->courseName }}</h2>
                      <p>
                       {{ $course->information }}
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
                    <div class="col">
                      <div class="accordion__content">
                        <h2>Diploma</h2>
                          <ul>
                            <li>
                              Computer Technical D3
                            </li>
                            <li>
                              Informatics Management D3
                            </li>
                          </ul>
                      </div>
                    </div>
                    <div class="col">
                      <div class="accordion__content">
                        <h2>Diploma</h2>
                        <ul>
                          <li>
                            Computer Technical D3
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col">
                      <div class="accordion__content">
                        <h2>Diploma</h2>
                        <ul>
                          <li>
                            Computer Technical D3
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col">
                      <div class="accordion__content">
                        <h2>Diploma</h2>
                        <ul>
                          <li>
                            Computer Technical D3
                          </li>
                        </ul>
                      </div>
                    </div>
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
                    @foreach ($courses as $items)
                    <li class="splide__slide">
                      <a href="{{ route('scourse.detail', $items->slug) }}">
                        <div class="card">
                          <img
                            src="{{ asset(Storage::url($items->thumbnail)) }}"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <h5 class="card-title">{{ $items->courseName }}</h5>
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
