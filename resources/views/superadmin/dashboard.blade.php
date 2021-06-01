@extends('superadmin.layouts.admin')
@section('content')


    <!-- Topbar -->
    
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    
    <div class="container-fluid">
      @include('flashmessage.validation')
        @include('flashmessage.flash')
      <!-- Content Row -->
      <div class="row">
        <!--Earnings member count -->
        @if (auth()->user()->role != 'sadmin')
            
        @else
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">MEMBER</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif


        <!-- course count -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">COURSE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $course }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-table fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- student enrollment count -->
        @if (auth()->user()->role != 'sadmin')
            
        @else
        <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
           <div class="card-body">
             <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1">STUDENT ENROLLMENT</div>
                 <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $enrollment }}</div>
               </div>
               <div class="col-auto">
                 <i class="fas fa-pen-square fa-2x text-gray-300"></i>
               </div>
             </div>
           </div>
         </div>
       </div>
        @endif
        <!-- admin count -->
        @if (auth()->user()->role != 'sadmin')
            
        @else
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Admin</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $admin }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif


        {{-- artikel news --}}
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">News</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $news }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- artikel Events --}}
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Events</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $event }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- artikel Scholarship --}}
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-dark shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Scholarship</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $scholarship }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-star fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- artikel Research --}}
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2" style="border-left: .25rem solid #885A89 !important;">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-uppercase mb-1" style="color:#885A89 !important;">Research</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $research }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- /.container-fluid -->

  
    
@endsection