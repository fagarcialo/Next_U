$(document).ready(function(){
  /*esto aplica a los hiperbinculos tipo a, cuando hacen click*/
  $('a').click(function(){
    var nav = $(this).attr('href');
    //alert(nav.length);
	console.log('Esta parado en: '+nav.length);
	/*var x = document.getElementById('id');
	var resultados = document.getElementsByClassName('clase');
	for(i=0; i < resultados.length; i++){
		resultados[i].innerHTML = "Nuevo texto";
	}
	getElementsByName
	*/
    //esto es para que solo lo tenga en cuenta si no es el menu del movil
    if (nav.length > 1) {
        $('html, body').animate({
          scrollTop: $( $(this).attr('href')).offset().top
        },1500);
      }
    });

	console.log();

});

/*
function activar_video(){
  var vid = document.getElementById('mivideo');
  //vid.autoplay = true;
  vid.style="width:50%";
  //vid.load();
}
document.getElementById("mivideo").onmouseenter=activar_video;
*/

var vid = document.getElementById("mivideo");
function enableAutoplay() { 
    vid.autoplay = true;
    vid.load();
}
