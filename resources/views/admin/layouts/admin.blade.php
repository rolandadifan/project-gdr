@include('admin.include.header')

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.include.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        @include('admin.include.nav')
        @yield('content')
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('admin.include.footer')
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
  @include('admin.include.logoutmodal')

  <!-- Bootstrap core JavaScript-->
  @stack('prepend-script')
  @include('admin.include.script')
  @stack('addon-script')

  
</body>

</html>
