<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TODO | @yield('title')</title>
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('materialize/css/style.css')}}">
  </head>
  <body>
    @section('navbar')
      @include('parts.navbar')
    @show

    @section('slider')
      @include('parts.slider')
    @show

    <div class="container">
      @yield('content')
    </div>

    @section('footer')
      @include('parts.footer')
    @show

    <!--Import jQuery before materialize.js  copas dari materialize-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>

     <script type="text/javascript">
       $( document ).ready(function(){})
        $(".button-collapse").sideNav();

       $('.carousel.carousel-slider').carousel({
         fullWidth: true
       })

      function autoplay() {
          $('.carousel').carousel('next');
          setTimeout(autoplay, 4500);
      }

     </script>
  </body>
</html>
