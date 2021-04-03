@include('superadmin.include.header')

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('superadmin.include.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        @include('superadmin.include.nav')
        @yield('content')
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('superadmin.include.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('superadmin.include.logoutmodal')

  <!-- Bootstrap core JavaScript-->
  @stack('prepend-script')
  @include('superadmin.include.script')
  @stack('addon-script')

  
</body>

</html>
