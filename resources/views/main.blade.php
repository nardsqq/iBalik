<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <body>
    @yield('content')
    @include('partials._footer')
    @include('partials._script')
    @yield('scripts')
  </body>
</html>