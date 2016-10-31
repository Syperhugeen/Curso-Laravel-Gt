

$(function() {

     //urld del navegador 
     var pgurl = window.location.href;       

     $("#defaultNavbar1 ul li a").each(function()
     { 

          //atributo href del link
          if(($(this).attr("href") == pgurl) || ( $(this).attr("href")+'/' == pgurl ))
          {            
            $(this).parent()
                   .addClass("active");
          }
          
     })
});