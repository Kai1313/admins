<!DOCTYPE html>
@include('admin.layouts.header')
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
</body>
</html>
