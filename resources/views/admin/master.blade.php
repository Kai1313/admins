<!DOCTYPE html>
  @include('admin.layouts.header')
  @yield('addon-css')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.layouts.navbar')

  <!-- Main Sidebar Container -->
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')
</div>
@include('admin.layouts.mainjs')
@yield('addon-js')
<!-- AdminLTE App -->
<script src="{{asset('assets/lte/dist/js/adminlte.min.js')}}"></script>
@yield('addon-script')
</body>
</html>
