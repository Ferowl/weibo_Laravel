<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'WeiBo App') - Laravel 新手入门教程</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
      @yield('content')
      @include('layouts._footer')
    </div>
  </body>
</html>
