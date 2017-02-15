<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$Empresa->name}} - @yield('title')</title>
    <meta name="Description" CONTENT="@yield('MetaContent')">

    <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/app.css') }}">   
    <link rel="stylesheet" type="text/css" href=" {{ asset('Iconos/fonts/style.css')}}">
    <META name="robots" content="@yield('MetaRobot')">





  <script>
  $(function() {
    // This will select everything with the class smoothScroll
    // This should prevent problems with carousel, scrollspy, etc...
    $('.smoothScroll').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 800); // The number here represents the speed of the scroll in milliseconds
          return false;
        }
      }
    });
  });
  </script>





  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="120">

      <div class="global-wrapper">

           @include('layouts.user_layout.navbar.navbar')

           <div>
                @yield('content')  
           </div>




          <div class="container-fluid section-wrapper-footer bgcolor-2">
            <div class="row">    
              <div class="col-md-10 col-md-push-1">

             @include('layouts.user_layout.footer.footer')

              </div>  
            </div>
          </div>

      </div>



    <!-- Scripts -->
    <script src="{{ asset('js/all.js')}}"></script>    
     <!-- activate WOW.js (ya está cargada al principio del html code) --> 
    <script> new WOW().init(); </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
          pauseOnHover: false,
          responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
  </script>
  </body>
</html>   