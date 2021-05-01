<ul class="navbar-nav @if(Auth()->user()->role == 'sadmin')  @else bg-gradient-info @endif sidebar sidebar-dark accordion"
    id="accordionSidebar" style="background-color: #885A89 !important">

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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Admin</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Students Info</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
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
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <a class="collapse-item" href="utilities-border.html">Enrollment</a>
                <a class="collapse-item" href="cards.html">Requirment</a>
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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about.edit') }}">
            <i class="fas fa-fw fa-info-circle"></i>
            <span>About</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-running"></i>
            <span>Campus Activity</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-comment"></i>
            <span>review</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu" aria-expanded="true"
            aria-controls="collapsePages">

            <i class="fas fa-fw fa-folder-minus"></i>
            <span>Page</span>
        </a>
        <div id="menu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('page.index') }}">Single Page</a>
                <a class="collapse-item" href="{{ route('page.multi') }}">Multi Page</a>
                <a class="collapse-item" href="{{ route('page.create') }}">Add Page</a>
            </div>
        </div>
    </li>


    <!- - Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
