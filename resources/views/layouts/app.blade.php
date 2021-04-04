@include('include.header')


      <!-- navigation bar -->
      @include('include.navbar')
      <!-- sidebar -->
      @include('include.sidebar')
    </header>

    @yield('content')
    
   <!-- thumbnail -->
    @include('include.thumbnail')

    <!-- contact gunadarma -->
    @include('include.contact')
    <!-- footer -->
    @include('include.footer')
    

    @stack('prepend-script')
    @include('include.script')
    @stack('addon-script')
  </body>
</html>