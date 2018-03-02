
$(document).ready(function(){
  /*esto aplica a los hiperbinculos tipo a, cuando hacen click*/
  $('a').click(function(){
    var nav = $(this).attr('href');
    //alert(nav.length);
    //esto es para que solo lo tenga en cuenta si no es el menu del movil
    if (nav.length > 1) {
        $('html, body').animate({
          scrollTop: $( $(this).attr('href')).offset().top-60
        },1500);
      }
    });

});
