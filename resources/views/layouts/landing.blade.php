@include('include.header')
{{-- info gundar --}}
 @include('include.info')

      <!-- navigation bar -->
      @include('include.navbar')
      <!-- sidebar -->
      @include('include.sidebar')
    </header>

    @yield('content')
    
   
    <!-- footer -->
    @include('include.footer')

    @stack('prepend-script')
    @include('include.script')
    @stack('addon-script')
  </body>
</html>
