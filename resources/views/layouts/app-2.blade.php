@include('include.header')


      <!-- navigation bar -->
      @include('include.navbar')
      <!-- sidebar -->
      @include('include.sidebar')
    </header>

    @include('include.jumbotron')
    @yield('content')
    
    <!-- contact gunadarma -->
    @include('include.contact')
    <!-- footer -->
    @include('include.footer')
    

    @stack('prepend-script')
    @include('include.script')
    @stack('addon-script')
  </body>
</html>