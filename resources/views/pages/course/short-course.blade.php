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
            <div class="shortCourses__context">
              <div class="container-fluid">
                <div
                  class="row row-cols-lg-4 row-cols-1 row-cols-md-3 justify-content-center"
                >
                  <!-- forloop di BE -->
                  <div class="col">
                    <a href="./detail-course.html">
                      <div class="card">
                        <img
                          src="./../../assets/images/communication.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Communications</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/communication.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Communications</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/communication.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Communications</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/communication.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Communications</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/computer-science.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Computer Science</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/industrial-engineering.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">industrial-engineering</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/industrial-engineering.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">industrial-engineering</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/industrial-engineering.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">industrial-engineering</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col">
                    <a href="#">
                      <div class="card">
                        <img
                          src="./../../assets/images/industrial-engineering.png"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">industrial-engineering</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- end for loop -->
                </div>

                <!-- pagination -->
                <nav aria-label="paginationCourses" class="mt-3">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo; Prev</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">Next &raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>
            </div>
        </section>
    </main>
    @endsection
