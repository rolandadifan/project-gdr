@include('include.header')


      <!-- navigation bar -->
      @include('include.navbar')
      <!-- sidebar -->
      @include('include.sidebar')
    </header>

    @include('include.jumbotron')
    @yield('content')
    
    <!-- footer -->
    @include('include.footer')
    

    @stack('prepend-script')
    @include('include.script')
    @stack('addon-script')
  </body>
</html>