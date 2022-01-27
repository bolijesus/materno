<section id="content">
  <!--breadcrumbs start-->
  @include('templates.layout.breadcrumbs')
  <!--breadcrumbs end-->
    <!--start container-->
    <div class="container">
      @yield('content')
    </div>
    <!--end container-->
  </section>