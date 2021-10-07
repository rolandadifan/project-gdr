<ul class="navbar-nav position-custome @if(Auth()->user()->role == 'sadmin')  @else bg-gradient-info @endif sidebar sidebar-dark accordion"
    id="accordionSidebar" style="background-color: #885A89 !important;">

    <!-- Sidebar - Brand -->
    <div class="nav-item">
        <a class="sidebar-brand d-flex align-items-center justify-content-center"
            href="{{ route('dashboard.sadmin') }}">
            <img src="{{ asset('adminvendor/img/gdr-logo.png') }}" width="150" alt="">
        </a>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.sadmin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    {{-- admin list menu --}}
    @if (auth()->user()->role == 'sadmin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Admin</span></a>
    </li>
    @endif

    {{-- student info menu --}}
    @if (auth()->user()->role == 'sadmin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Students Info</span></a>
    </li>
    @endif

    
    {{-- course menu --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Course</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('course.index') }}">List</a>
                {{-- <a class="collapse-item" href="utilities-border.html">Add</a> --}}
                <div class="btn-group dropright ml-3 my-2">
                    <button class="bg-light dropdown-toggle"
                        style="border: none; background-color:transparent !important" type="button"
                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('short.create') }}">Short Course</a>
                        <a class="dropdown-item" href="{{ route('course.create') }}">Course</a>
                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                </div>
                <a class="collapse-item" href="{{ route('course.requirment') }}">Course Requirment</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-pen-square"></i>
            <span>Enrollment</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @if (auth()->user()->role == 'sadmin')
                <a class="collapse-item" href="{{ route('enroll.index') }}">List</a>
                @endif
                {{-- <a class="collapse-item" href="utilities-border.html">Add</a> --}}
                <a class="collapse-item" href="{{ route('requirment.index') }}">Enrollment Requirment</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#key-dates"
            aria-expanded="true" aria-controls="key-dates">
            <i class="fas fa-fw fa-key"></i>
            <span>Key Dates</span>
        </a>
        <div id="key-dates" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('key-date.index') }}">List</a>
                {{-- <a class="collapse-item" href="utilities-border.html">Add</a> --}}
                <a class="collapse-item" href="{{ route('key-date.create') }}">Add</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pages
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Articels</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('artikel.scholarship') }}">Scholarship</a>
                <a class="collapse-item" href="{{ route('artikel.research') }}">Research</a>
                <a class="collapse-item" href="{{ route('artikel.news') }}">News</a>
                <a class="collapse-item" href="{{ route('artikel.event') }}">Event</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->

    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('about.edit') }}">
    <i class="fas fa-fw fa-info-circle"></i>
    <span>About</span></a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesactivity"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-running"></i>
            <span>Campus Activity</span>
        </a>
        <div id="collapsePagesactivity" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('student.info') }}">Why Study At Gunadarma</a>
                <a class="collapse-item" href="{{ route('student.life') }}">Student Life</a>
                <a class="collapse-item" href="{{ route('student.graduation') }}">Graduation</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesInfo"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>Info</span>
        </a>
        <div id="collapsePagesInfo" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('about.edit') }}">About</a>
                <a class="collapse-item" href="{{ route('page.multi') }}">How To Apply</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('schedules.index') }}">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Graduation Schedule</span></a>
    </li>

    @if (auth()->user()->role == 'sadmin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('alumni-info.index') }}">
            <i class="fas fa-fw fa-comment"></i>
            <span>Alumni</span></a>
    </li>
    @endif

    <li class="nav-item">
        <a class="nav-link" href="{{ route('location.index') }}">
            <i class="fas fa-fw fa-map"></i>
            <span>Location</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu" aria-expanded="true"
            aria-controls="collapsePages">

            <i class="fas fa-fw fa-folder-minus"></i>
            <span>Pages</span>
        </a>
        <div id="menu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('page.index') }}">Menu Page</a>
                <a class="collapse-item" href="{{ route('page.create') }}">Add Page</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="{{ route('setting.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>