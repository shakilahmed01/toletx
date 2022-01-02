<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('Dashboard.css.css')
</head>
<body>
  @include('Dashboard.preloader.preloader')

  @include('Dashboard.header.header')

  @include('Dashboard.menubar.menubar')

  @include('Dashboard.menubar.leftsidemenu')

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- JavaScript Bundle with Popper -->
@include('Dashboard.js.js')
</body>
</html>
