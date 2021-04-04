@extends('layouts.app')
@section('content')
@include('include.jumbotron')
@include('icon')
<main>
        <section id="shortCourses" class="p-2">
            <div class="shortCourses__header">
              <h2>International Programs</h2>
              <h4>Short Courses</h4>
            </div>
            <div class="shortCourses__mainContent">
              <div class="card">
                <div class="row row-cols-1 g-0 align-items-center">
                  <div class="col">
                    <div class="shortCourses__boxImg">
                      <img
                        src="{{ asset('assets/images/computer-science.png') }}"
                        alt="Basketball Park"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="shortCourses__mainContent--description">
                      <h2>Computer Science</h2>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officia placeat ad eius eligendi sequi doloribus facere voluptatum, corporis magnam accusantium tempore cum consequatur omnis molestiae, aut, ab id vero?
                        Obcaecati quisquam voluptatem amet magnam sapiente alias velit deserunt sit culpa tempore doloribus dignissimos laboriosam voluptate ipsa commodi dolores officia, odit eum maxime natus porro, quibusdam illum. Labore, dignissimos ipsam.
                        
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
                    <li class="splide__slide">
                      <a href="#">
                        <div class="card">
                          <img
                            src="{{ asset('assets/images/communication.png') }}"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <h5 class="card-title">Communications</h5>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#">
                      <div class="card">
                        <img
                          src="{{ asset('assets/images/computer-science.png') }}"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Computer Science</h5>
                        </div>
                      </div>
                    </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#">
                      <div class="card">
                        <img
                          src="{{ asset('assets/images/computer-science.png') }}"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Computer Science</h5>
                        </div>
                      </div>
                    </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#">
                      <div class="card">
                        <img
                          src="{{ asset('assets/images/computer-science.png') }}"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Computer Science</h5>
                        </div>
                      </div>
                    </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#">
                      <div class="card">
                        <img
                          src="{{ asset('assets/images/computer-science.png') }}"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Computer Science</h5>
                        </div>
                      </div>
                    </a>
                    </li>
                    <li class="splide__slide">
                      <a href="#">
                      <div class="card">
                        <img
                          src="{{ asset('assets/images/computer-science.png') }}"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Computer Science</h5>
                        </div>
                      </div>
                    </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- end looping -->
            </div>
          </section>
    </main>
    
@endsection
