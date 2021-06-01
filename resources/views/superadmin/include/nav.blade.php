<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto" id="result">
      @if (auth()->user()->role != 'sadmin')
          
      @else
      <!-- Nav Item - Alerts -->
      <li class="nav-item dropdown no-arrow mx-1" onclick="test()" >
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter">{{ $notification->count() }}</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header" style="background-color: #885A89 !important">
            Alerts Center
          </h6>
          @forelse ($notification as $notif)
          <a class="dropdown-item d-flex align-items-center" href="{{ route('enroll.index') }}">
            <div class="mr-3">
              <div class="icon-circle" style="background-color: #885A89 !important">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">{{ date('M d, Y', strtotime($notif->created_at)) }}</div>
              <span class="font-weight-bold">{{ $notif->data['user'] }} hast Submit Enrollment</span>
            </div>
          </a>
          @empty
              <p class="text-center">There are no new notifications</p>
          @endforelse
          
           
          {{-- <form action="{{ route('markRead') }}" method="POST">
            @csrf
            <button type="submit">Mark As Read</button>
          </form> --}}
          <a class="dropdown-item text-center small text-gray-500" href="{{ route('enroll.index') }}">Show All</a>
        </div>
      </li>
      @endif


      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth()->user()->name }}</span>
          @if (isset(auth()->user()->userDetail->avatar))
          <img class="img-profile rounded-circle" src="{{ Storage::url(Auth()->user()->userDetail->avatar) }}">
          @else
          <img class="img-profile rounded-circle" src="{{ asset('assets/images/avatar-default.png') }}">
          @endif
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{ route('profile.admin.index') }}">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>

  @push('addon-script')
<script>
  function test(){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        /* the route pointing to the post function */
        url: '/maskAsRead',
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN,},
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
            $("#result").load($(this).attr('href'));
        }
    }); 
  }
</script>
@endpush
