
 
  $('.boton-ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 300);
  });
 
  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.boton-ir-arriba').slideDown(300);
    } else {
      $('.boton-ir-arriba').slideUp(300);
    }
  });
 
