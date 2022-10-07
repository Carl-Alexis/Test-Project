<div class="wrapper ">
    @include('layouts.navbar.sidebar')
    <div class="main-panel">
      @include('layouts.navbar.nav.auth')
      @yield('content')
      @include('layouts.footer.auth')
    </div>
</div>
