@extends('layouts.app')
@section('content')
@section('breadcrumb-title', 'Short Courses')
@section('title-jumbotron', 'Short Courses')
@section('s-title-jumbotron', 'Premium. Proven. Loved. Study at Gunadarma')
@section('text-jumbotron', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa corrupti voluptas vel quisquam illum voluptate quod impedit ab nisi, esse mollitia ad aliquid delectus ea sit autem officiis. Reprehenderit, tenetur!')
@include('icon')
    <main>
        <section id="shortCourses" class="p-2">
            <div class="shortCourses__header">
              <h2>International Programs</h2>
              <h4>Short Courses</h4>
            </div>
            <div class="shortCourses__context">
              <div class="container-fluid">
                <div
                  class="row row-cols-lg-4 row-cols-1 row-cols-md-3 justify-content-center"
                >
                  <!-- forloop di BE -->
                  @forelse ($courses as $item)
                  <div class="col">
                    <a href="{{ route('scourse.detail', $item->slug) }}">
                      <div class="card">
                        <img
                          src="{{Storage::url($item->courseDetail->thumbnail)}}"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">{{$item->name}}</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  @empty
                  <h5 class="text-center">Course Not Available Right Now</h5>
                  @endforelse
                  <!-- end for loop -->
                </div>

                <!-- pagination -->
                <nav aria-label="paginationCourses" class="mt-3">
                    <ul class="pagination justify-content-center">
                      {{ $courses->links('vendor.pagination.bootstrap-4') }}
                    </ul>
                  </nav>
              </div>
            </div>
        </section>
    </main>
    @endsection
