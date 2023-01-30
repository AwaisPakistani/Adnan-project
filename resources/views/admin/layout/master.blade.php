@include('admin.layout.head')

<body>


  <!--start wrapper-->
  <div class="wrapper">
      <!--start top header-->
         @include('admin.layout.header')
        <!--end top header-->
        <!--start sidebar -->
        @include('admin.layout.sidebar')
        <!--end sidebar -->
        <!--start main content-->
         @yield('content')
         <!--end main contetrn-->
         <!--start footer-->
         @include('admin.layout.footer')
         <!--end footer-->
   </div>
         <!--start foot-->
         @include('admin.layout.foot')
         <!--end foot-->