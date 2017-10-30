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
  (function() {
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
  <body data-spy="scroll" data-target="navbar" data-offset="120"> <!-- le quité el punto al valor de data-target; .navbar decía antes -->

      <div class="global-wrapper">

         <!-- social media right widget -->
        <div class="social-media-widget wow fadeInRight delay2 hidden-xs">
          
            <a href="https://www.facebook.com/GLOBALTARGET/" target="_blank" alt="Global Target social media">
              <div class="social-media-item social-media-item-top">
                <h3><span class="socicon socicon-facebook"></span> /globaltarget</h3>
              </div>
            </a>
          
          
            <a href="https://www.instagram.com/agencia_globaltarget/" target="_blank" alt="Global Target social media">
              <div class="social-media-item">
                <h3><span class="socicon socicon-instagram"></span> /agencia_globaltarget</h3>
              </div>
            </a>
          
          
            <a href="https://www.linkedin.com/company/agencia-global-target" target="_blank" alt="Global Target social media">
              <div class="social-media-item social-media-item-bottom">
                <h3><span class="socicon socicon-linkedin"></span> /agencia-global-target</h3>
              </div>  
            </a>
          
        </div>


           @include('layouts.user_layout.navbar.navbar')

           <div>
                @yield('content')  
           </div>




          <div>
             @include('layouts.user_layout.footer.footer')
          </div>

      </div>



  <!-- Scripts -->
  <script src="{{ asset('js/all.js')}}"></script>    

  <!-- activate WOW.js (ya está cargada al principio del html code) --> 
  <script> new WOW().init(); </script>

  <!-- carrousel de logos customizer -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
          pauseOnHover: false,
          responsive: [{
          breakpoint: 992,
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

  <!-- agregar class "horizontal" a las img con width mayor que height -->
  <script type="text/javascript">
  $(window).load(function(){
     $("img").each(function(){
        var $this = $(this);
        if ($this.width() > $this.height()) {
            $this.addClass("horizontal");
        }
     });
    });
  </script>


  <!-- script para abrir el modal con el lightbox de las fotos -->
  <script type="text/javascript">
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                  event.preventDefault();
                  $(this).ekkoLightbox();
              });
  </script>

  </body>
</html>   