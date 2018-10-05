<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- META-TAGS DE FAVICONS, DISPOSITIVOS Y THUMBNAILS -->
      <!-- social media meta-tags for proper sharing
      (la imagen tiene que estar en la carpeta root, ratio 1.91:1 1200x630px) -->
      <meta property="og:title" content="Global Target">
      <meta property="og:description" content="Agencia de modelos, eventos y promociones.">
      <meta property="og:image" content="https://www.globaltarget.com.uy/thumbnail.jpg">
      <meta property="og:url" content="https://www.globaltarget.com.uy/">
      
      <!-- Favicons (tienen que estar en la carpeta root) -->
      <link rel="icon" type="image/png" href="https://www.globaltarget.com.uy/favicon-16x16.png" sizes="16x16">  
      <link rel="icon" type="image/png" href="https://www.globaltarget.com.uy/favicon-32x32.png" sizes="32x32">  
      <link rel="icon" type="image/png" href="https://www.globaltarget.com.uy/favicon-96x96.png" sizes="96x96">

      <!-- Apple Touch Icons (tienen que estar en la carpeta root) -->
      <link rel="apple-touch-icon" href="older-iPhone.png"> <!-- // 120px -->  
      <link rel="apple-touch-icon" sizes="180x180" href="iPhone-6-Plus.png">  
      <link rel="apple-touch-icon" sizes="152x152" href="iPad-Retina.png">  
      <link rel="apple-touch-icon" sizes="167x167" href="iPad-Pro.png">

      <title>{{$Empresa->name}} - @yield('title')</title>
      <meta name="Description" CONTENT="@yield('MetaContent')">

      <link rel="stylesheet" type="text/css" href="{{url()}}{{ elixir('css/app.css') }}">   
      <link rel="stylesheet" type="text/css" href=" {{ asset('Iconos/fonts/style.css')}}">
      <META name="robots" content="@yield('MetaRobot')">

    <!-- realfavicongenerator headlines -->
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=eEGWoRWgP3">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=eEGWoRWgP3">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=eEGWoRWgP3">
      <link rel="manifest" href="/site.webmanifest?v=eEGWoRWgP3">
      <link rel="mask-icon" href="/safari-pinned-tab.svg?v=eEGWoRWgP3" color="#caa752">
      <link rel="shortcut icon" href="/favicon.ico?v=eEGWoRWgP3">
      <meta name="apple-mobile-web-app-title" content="GlobalTarget">
      <meta name="application-name" content="GlobalTarget">
      <meta name="msapplication-TileColor" content="#caa752">
      <meta name="theme-color" content="#ffffff">
   <!-- / fin de realfavicongenerator headlines -->
<!-- / fin de META-TAGS DE FAVICONS, DISPOSITIVOS Y THUMBNAILS -->

<!-- Global site tag (gtag.js) - Google Ads: 794875575 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-794875575"></script>

  <!-- Global site tag (gtag.js) - Google Analytics de la agencia nueva de Ads -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-116180841-1'); 

      @stack('adwords_contacto_push') 

    </script>
  <!-- /fin del tag -->


  <!-- Global site tag (gtag.js) - Google Analytics de nuestra campaña de Ads -->
    <!--
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116180841-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-116180841-1');
    </script>
    -->
  <!-- /fin del tag -->




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
        pauseOnClick: false,
        pauseOnFocus: false,
        responsive: [{
        breakpoint: 992,
        settings: {
          slidesToShow: 3
          }
        },{
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