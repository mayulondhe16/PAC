<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PAC') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/jquery.dataTables.min.css') }}" rel="stylesheet">
</head>
<style>
body,html
{
   height: 100%;
}

body {
  /* The image used */
   background-image: url("/frontend/image/abstract-geometric-banner-free-vector.jpg");
  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
    <div id="app">
        @include('layouts.inc.front-navbar')

        <main class="py-4">
            @yield('content')
        </main>
       {{--  @include('layouts.inc.front-footer') --}}
    </div>
    <!-- Scripts -->
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap5.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/parsley.min.js') }}"></script>
    <script>
        $('#example').DataTable({
        "pageLength": 2,
    });
</script>
</body>
</html>
