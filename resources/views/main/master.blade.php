<!DOCTYPE html>
<html lang="en">
@include('main.layouts.header')
<body>
  @include('main.layouts.navbar')

  @yield('content')

  @include('main.layouts.footer')

  @include('main.layouts.mainjs')
  @yield('addon-js')
</body>
</html>