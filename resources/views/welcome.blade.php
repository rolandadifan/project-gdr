@extends('layouts.landing')
@section('content')
     <!-- jumbotron -->
    <div class="jumbotron">
      <div class="jumbotron__overlay"></div>
      <div class="jumbotron__background">
        <img src="./assets/images/jumbotron-min.png" alt="Jumbotron" />
      </div>
      <div class="jumbotron__content">
        <h2>Get your degree with us</h2>
        <p>
          Beside providing you with new knowledge and raining in chosen
          disciplines
          <span class="jumbotron__textBreak">
            <br class="d-none d-lg-block" />
            Our university also gives you opportunity to benefit from spending
            your free time by planning
          </span>
        </p>
        <div class="jumbotron__button">
          <button type="button" class="btn primary__button">
            Start a Journey
          </button>
          <button type="button" class="btn secondary__button">
            <a href="./pages/courses/short-course.html" class="text-white text-decoration-none">Program Study</a>
          </button>
        </div>
      </div>
    </div>

    <!-- Courses -->
    <section id="interProgram" class="p-2">
      <div class="interProgram__header">
        <h2>International Programs</h2>
        <h4>COURSES</h4>
      </div>
      <div class="interProgram__context">
        <div class="container-fluid">
          <div
            class="row row-cols-lg-4 row-cols-1 row-cols-md-3 justify-content-center"
          >
            <!-- forloop di BE -->
            <div class="col">
              <a href="#">
                <div class="card">
                  <img
                    src="./assets/images/communication.png"
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
              <a href="./pages/courses/detail-course.html">
                <div class="card">
                  <img
                    src="./assets/images/computer-science.png"
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
                    src="./assets/images/industrial-engineering.png"
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
          <div class="interProgram__allCourse">
            <button class="btn primary__button">
              <a href="./pages/courses/short-course.html" class="text-white">All Courses</a>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- About Gunadarma -->
    <section id="aboutGunadarma">
      <div class="about__header">
        <h2>Gunadarma University</h2>
        <h4>ABOUT</h4>
      </div>
      <div class="about__content">
        <div class="container">
          <div class="row row-cols-md-2 row-cols-1 g-lg-0 align-items-center">
            <div class="col">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Perspiciatis magni, veritatis ad nobis delectus tenetur
                voluptatum beatae est voluptate obcaecati! Aspernatur tempora,
                quo voluptate expedita quasi voluptates veniam unde hic.
              </p>
              <a href="#">Read More...</a>
            </div>
            <div class="col">
              <div class="about__boxImg">
                <img src="./assets/images/pict.png" alt="Gunadarma" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Life at gunadarma -->
    <section id="lifeGunadarma">
      <div class="lifeGunadarma__header">
        <h2>Gunadarma University</h2>
        <h4>LIFE AT GUNADARMA UNIVERSITY</h4>
      </div>
      <div class="lifeGunadarma__contents">
        <div class="card">
          <div class="row row-cols-1 g-0 align-items-center">
            <div class="col-md-5">
              <div class="lifeGunadarma__boxImg">
                <img
                  src="./assets/images/gunadarma-life.png"
                  alt="Basketball Park"
                />
              </div>
            </div>
            <div class="col-md-7">
              <div class="lifeGunadarma__content">
                <h2>Sport Center</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente saepe blanditiis quae fugit minus, omnis tenetur
                  dolor excepturi quibusdam eveniet veniam accusantium impedit
                  harum corrupti consequuntur perspiciatis repellendus velit
                  odio!
                </p>
                <a href="#" class="btn primary__button">See More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- icon show -->
    @include('icon')

    <!-- Research  -->
    <section id="research">
      <div class="research__header">
        <h2>Gunadarma University</h2>
        <h4>RESEARCH</h4>
      </div>
      <div class="research__contents">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button
              class="nav-link active"
              id="research-group-tab"
              data-bs-toggle="tab"
              data-bs-target="#research-group"
              type="button"
              role="tab"
              aria-controls="research-group"
              aria-selected="true"
            >
              Research Group
            </button>
            <button
              class="nav-link"
              id="research-industry-tab"
              data-bs-toggle="tab"
              data-bs-target="#research-industry"
              type="button"
              role="tab"
              aria-controls="research-industry"
              aria-selected="false"
            >
              Research and Industry
            </button>
            <button
              class="nav-link"
              id="responses-covid-tab"
              data-bs-toggle="tab"
              data-bs-target="#responses-covid"
              type="button"
              role="tab"
              aria-controls="responses-covid"
              aria-selected="false"
            >
              Responses COVID-19
            </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="research-group"
            role="tabpanel"
            aria-labelledby="research-group-tab"
          >
            <div class="container-fluid">
              <div class="card">
                <div class="row row-cols-md-2 align-items-center">
                  <div class="col-md-5">
                    <div class="research__boxImg">
                      <img src="./assets/images/Mask Group 10.png" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="research__content">
                      <h3>
                        The Importance of Implementing Social Distancing to
                        Prevent COVID-19
                      </h3>
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Saepe et blanditiis quia earum alias quisquam,
                        molestias totam consectetur illo similique aliquam
                        quidem illum consequatur nobis repudiandae sapiente,
                        fuga veritatis. Minima.
                      </p>
                      <a href="#">Read More...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="row row-cols-md-2 align-items-center">
                  <div class="col-md-7">
                    <div class="research__content">
                      <h3>
                        The Importance of Implementing Social Distancing to
                        Prevent COVID-19
                      </h3>
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Saepe et blanditiis quia earum alias quisquam,
                        molestias totam consectetur illo similique aliquam
                        quidem illum consequatur nobis repudiandae sapiente,
                        fuga veritatis. Minima.
                      </p>
                      <a href="#">Read More...</a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="research__boxImg">
                      <img src="./assets/images/Mask Group 13.png" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="row row-cols-md-2 align-items-center">
                  <div class="col-md-5">
                    <div class="research__boxImg">
                      <img src="./assets/images/Mask Group 11.png" />
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="research__content">
                      <h3>
                        The Importance of Implementing Social Distancing to
                        Prevent COVID-19
                      </h3>
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Saepe et blanditiis quia earum alias quisquam,
                        molestias totam consectetur illo similique aliquam
                        quidem illum consequatur nobis repudiandae sapiente,
                        fuga veritatis. Minima.
                      </p>
                      <a href="#">Read More...</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="research-industry"
            role="tabpanel"
            aria-labelledby="research-industry-tab"
          >
            Research and Industry
          </div>
          <div
            class="tab-pane fade"
            id="responses-covid"
            role="tabpanel"
            aria-labelledby="responses-covid-tab"
          >
            Responses COVID-19
          </div>
        </div>
      </div>
    </section>

    <!-- Gunadarma Graduates -->
    <section id="gundarGraduates">
      <div class="gundarGraduates__header">
        <h2>Gunadarma University</h2>
        <h4>OUR PROUD GRADUATES</h4>
      </div>

      <div class="gundarGraduates__contents">
        <div class="gundarGraduates__slider">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card">
                  <div class="card__boxImg">
                    <img src="./assets/images/Mask Group 10.png" />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Kim Taehyun</h5>
                    <p class="card-text">
                      "It was glorious and i could Not stop to say who for Every
                      single moment, Thank you"
                    </p>
                    <hr />
                    <p class="card__course">COMMUNICATIONS</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card__boxImg">
                    <img src="./assets/images/Mask Group 10.png" />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Kim Namjoon</h5>
                    <p class="card-text">
                      "It was glorious and i could Not stop to say who for Every
                      single moment, Thank you"
                    </p>
                    <hr />
                    <p class="card__course">COMPUTER SCIENCE</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <div class="card__boxImg">
                    <img src="./assets/images/Mask Group 10.png" />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Fernando</h5>
                    <p class="card-text">
                      "It was glorious and i could Not stop to say who for Every
                      single moment, Thank you"
                    </p>
                    <hr />
                    <p class="card__course">INDUSTRIAL ENGINEERING</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
        <div class="gundarGraduates__join">
          <div class="join__container">
            <div class="join__background">
              <img src="./assets/images/Group 4149.png" />
            </div>
            <div class="container">
              <div class="row justify-content-around align-items-center">
                <div class="col-md-8 col-12">
                  <p>Ready for a simple future?</p>
                  <p>Start a journey!</p>
                </div>
                <div class="col-md-3 col-12">
                  <button class="btn primary__button">Start a Journey</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact gunadarma -->
    @include('include.contact')
  </div>

@endsection