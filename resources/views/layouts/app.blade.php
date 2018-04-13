<html>
  <head>
    <title>飲食店予約システム - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    @section('sidebar')

    @show

    <div class="container">
      @yield('content')
    </div>
  </body>
  <script src=" {{ mix('js/app.js') }} "></script>
</html>
