<html>
  <head>
    <title>飲食店予約システム - @yield('title')</title>
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
