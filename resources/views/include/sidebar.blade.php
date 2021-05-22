<div class="sidebar">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-12 sidebar__left">
                <div class="sidebar__closeBtn">
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="sidebar__logo d-none d-sm-block">
                    <img src="{{ asset('assets/images/logo-gundar.png') }}" alt="gunadarma" />
                </div>
                <div class="sidebar__logo d-block d-sm-none" style="font-size: 32px; color: #7E3485; font-weight: 500;">
                    Menu
                </div>

                @guest
                <!-- sebelum login -->
                <div class="d-flex justify-content-end my-3 mx-3 btn-login">
                    <a href="{{ route('login') }}">Login</a>
                </div>
                @endguest
                @auth
                <div class="d-flex align-items-center justify-content-between box__afterLogin">
                    <div class="d-flex align-items-center">
                        <div class="boxAvatar mx-3">
                            @if (!isset(auth()->user()->userDetail->avatar))
                            <img src="{{ asset('assets/images/avatar-default.png')}}" alt="profile">
                            @else
                            <div style="
                                background-image: url({{ Storage::url(auth()->user()->userDetail->avatar)}});
                                background-position: center;
                                background-size: cover;
                                width: 50px;
                                height: 50px;" alt="profile"></div>
                            @endif
                        </div>
                        <p class="profile__name mx-2 my-5">{{ auth()->user()->name }}</p>
                    </div>
                    <a class="mx-3" href="{{ route('profile') }}">Profile</a>
                </div>
                @endauth
                <div class="sidebar__menu">
                    <div class="accordion accordion-flush" id="accordionCourse">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="menuCourse">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#course" aria-expanded="false" aria-controls="course">
                                    Courses
                                </button>
                            </h2>
                            <div id="course" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionCourse">
                                <div class="accordion-body">
                                    <div class="list-menu">
                                        <div class="accordion__child-menu">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="findCourseParent">
                                                    <button class="accordion-button collapsed accordion__child"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#findCourse" aria-expanded="false"
                                                        aria-controls="findCourse">
                                                        Find a course
                                                    </button>
                                                </h2>
                                                <div id="findCourse" class="accordion-collapse collapse accordion__show"
                                                    aria-labelledby="findCourse" data-bs-parent="#findCourseParent">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('scourse.index') }}">Short Courses</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('undergraduate.index') }}">Undergraduate
                                                                    Courses</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('postgraduate.index') }}">Postgraduate
                                                                    Courses</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <a href="{{ route('scholarship.index') }}" class="accordion-header"
                                                    id="scholarships">
                                                    <button class="accordion-button collapsed" type="button">
                                                        Scholarships
                                                    </button>
                                                </a>
                                            </div>

                                            <div class="accordion-item">
                                                <a href="{{ route('apply.index') }}" class="accordion-header"
                                                    id="howToApplyParent">
                                                    <button class="accordion-button collapsed" type="button">
                                                        How to apply
                                                    </button>
                                                </a>

                                            </div>

                                            <div class="accordion-item">
                                                <a href="{{ route('key.index') }}" class="accordion-header"
                                                    id="keyDates">
                                                    <button class="accordion-button collapsed" type="button">
                                                        Key Dates
                                                    </button>
                                                </a>
                                            </div>

                                            <div class="accordion-item">
                                                <a href="{{ route('enrollment.index') }}" class="accordion-header"
                                                    id="scholarships">
                                                    <button class="accordion-button collapsed" type="button">
                                                        Student Enrollment
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <a href="{{ route('loc-gundarma.index') }}" class="accordion-header" id="location">
                                <button class="accordion-button collapsed" type="button">
                                    Location
                                </button>
                            </a>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="aboutGunadarmaHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#aboutGunadarma" aria-expanded="false"
                                    aria-controls="aboutGunadarma">
                                    About Gunadarma
                                </button>
                            </h2>
                            <div id="aboutGunadarma" class="accordion-collapse collapse"
                                aria-labelledby="aboutGunadarmaHeading" data-bs-parent="#aboutGunadarmaHeading">
                                <div class="accordion-body">
                                    <div class="accordion__child-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ route('page.about') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('page.news') }}">News</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('page.event') }}">Event</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="lifeGunadarmaHeading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#lifeGunadarma" aria-expanded="false" aria-controls="lifeGunadarma">
                                    Life at gunadarma
                                </button>
                            </h2>
                            <div id="lifeGunadarma" class="accordion-collapse collapse"
                                aria-labelledby="lifeGunadarmaHeading" data-bs-parent="#lifeGunadarmaHeading">
                                <div class="accordion-body">
                                    <div class="accordion__child-menu">
                                        <ul>
                                            <li>
                                                <a href="{{ route('life.why') }}">Why study at Gunadarma</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('life.student') }}">Student life</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('life.graduation') }}">Graduations</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <a href="{{ route('research.index') }}" class="accordion-header" id="researchHeading">
                                <button class="accordion-button collapsed" type="button">
                                    Research
                                </button>
                            </a>
                        </div>

                        <div class="accordion-item">
                            <a href="{{ route('alumni.index') }}" class="accordion-header" id="alumni">
                                <button class="accordion-button collapsed" type="button">
                                    Alumni
                                </button>
                            </a>
                        </div>



                        @forelse ($menu_detail as $item)
                        <div class="accordion-item">
                            <a href="{{ url($item->slug) }}" class="accordion-header" id="alumni">
                                <button class="accordion-button collapsed no-after" type="button">
                                    {{  $item->title }}
                                </button>
                            </a>
                        </div>
                        @empty

                        @endforelse

                        @auth
                        <div class="accordion-item">
                            <a>
                                <form action="{{ route('logout') }}" class="accordion-header" id="alumni" method="POST">
                                    @csrf
                                    <button type="submit" class="accordion-button collapsed">Logout</button>
                                </form>
                            </a>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-0 d-none d-lg-block sidebar__right"></div>
        </div>
    </div>
</div>