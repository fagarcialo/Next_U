/*$(function(){
  $("#titulo").on("click", function(){
    $(this).animate(
      {
        color: "#ff0e32"
      }, 1000, function(){
        $(this).animate(
          {
            color: "#DCFF0E"
          }, 1000
        )
      });
  });
});*/
var buscarHorizontales=0;
var buscarVerticales=0;
var buscarNuevosDulces=0;
var lencolum=["","","","","","",""];
var lenrest=["","","","","","",""];
var maximo=0;
var matriz=0;
var intervalo=0;
var eliminar=0;
var nuevosDulces=0;
var reloj=0;
var i=0;
var contadorTotal=0;
var espera=0;
var puntaje=0;
var mov=0;
var min=5;
var seg=10;
var sonido = document.getElementById("myAudio"); 
var sonido2 = document.getElementById("myAudio2"); 
var sonido3 = document.getElementById("myAudio3"); 
var sonido4 = document.getElementById("myAudio4"); 
var sonido5 = document.getElementById("myAudio5"); 

$( document ).ready(function() {  
    /*para cambiar el color al titulo*/
	setInterval(function(){$("#titulo").animate(
      {
        color: "#ff0e32"
      }, 100, function(){
        $("#titulo").animate(
          {
            color: "#DCFF0E"
          }, 1000
        )
      }); 
	},1000)	;

	llenar_tablero();
	//desplazamiento();
	//$(".col-1").append("<img class= 'elemento' src= 'image/1.png'>");	
  
});

/*para llenar al azar los elementos del panel*/
function llenar_tablero(){
	for (var i=1; i <= 7; i++)
		{
		for (var j=0; j < 7; j++)
			{
			$(".elemento").draggable({disabled:true});
				var numero = Math.floor((Math.random()*4)+1);
				$(".col-"+i).append("<img class= 'elemento' src= 'image/"+numero+".png'>");				
			}
		}
}

//---------------botón Iniciar-Reiniciar----------------
$(".btn-reinicio").click(function(){
	i=0;
	puntaje=0;
	mov=0;
	
	$(".panel-score").css("width","25%");
	$(".panel-tablero").show();
	$(".time").show();
	$("#score-text").html("0");
	$("#movimientos-text").html("0");
	$(this).html("Reiniciar")
	clearInterval(intervalo);
	clearInterval(eliminar);
	clearInterval(nuevosDulces);
	clearInterval(reloj);
	min=2;
	seg=0;
	limpiarTablero();
	intervalo=setInterval(function(){
		crear_fila()
	},100);
	reloj=setInterval(function(){
		tiempo()
	},1000);
	
	sonido4.play();
});

//---------------Función crear fila con dulces aleatoriamente----------------
function crear_fila(){
	i=i+1
	var numero=0;
	var imagen=0;
	$(".elemento").draggable({disabled:true});
	if(i<8){
		for(var j=1;j<8;j++){
			if($(".col-"+j).children("img:nth-child("+i+")").html()==null){
				numero=Math.floor(Math.random()*4)+1;
				imagen="image/"+numero+".png";
				$(".col-"+j).prepend("<img src="+imagen+" class='elemento'/>").css("justify-content","flex-start")
			}}}
	if(i==8){
	clearInterval(intervalo);
	eliminar=setInterval(function(){
									eliminardulces()
									},150);}
};

//---------------Función de tiempo regresivo----------------
function tiempo(){
	if(seg!=0){
		seg=seg-1;}
	if (seg==10 && min==0){
      sonido3.play();}	
	if (seg==35 && min==0){
      sonido4.play();}	
	if(seg==0){
		if(min==0){
			clearInterval(eliminar);
			clearInterval(nuevosDulces);
			clearInterval(intervalo);
			clearInterval(reloj);
			$(".panel-tablero").hide("drop","slow",finalizar);
			$(".time").hide();
			}
		seg=59;
		min=min-1;}
	$("#timer").html("0"+min+":"+seg);
};

//---------------Función para mostrar la pantalla final de puntuación----------------
function finalizar(){
	$( ".panel-score" ).animate({width:'100%'},3000);
	$(".termino").css({"display":"block","text-align":"center"});
	sonido4.pause();
	sonido5.play();
};

//---------------Función para limpiar todo el tablero----------------
function limpiarTablero(){
	for(var j=1;j<8;j++){
		$(".col-"+j).children("img").detach();}
};

//---------------Función para eliminar los Dulces--------------------------
function eliminardulces(){
	matriz=0;
	buscarHorizontales=horizontal();
	buscarVerticales=vertical();
	for(var j=1;j<8;j++){
		matriz=matriz+$(".col-"+j).children().length;}
	//Condicional si no encuentra 3 dulces o más, llamamos a la función para volver a completar el juego
	if(buscarHorizontales==0 && buscarVerticales==0 && matriz!=49){
		clearInterval(eliminar);
		buscarNuevosDulces=0;
		nuevosDulces=setInterval(function(){
			nuevosdulces()
		},100);}

	if(buscarHorizontales==1||buscarVerticales==1){
		$(".elemento").draggable({disabled:true});
		$("div[class^='col']").css("justify-content","flex-end");
		$(".activo").hide("pulsate",1000,function(){
			var puntajetmp=$(".activo").length;
			$(".activo").remove("img");
			puntaje=puntaje+puntajetmp*10;
			$("#score-text").html(puntaje);//Cambiamos la puntuación
		});
	}
	if(buscarHorizontales==0 && buscarVerticales==0 && matriz==49){
		$(".elemento").draggable({
			disabled:false,
			containment:".panel-tablero",
			revert:true,
			revertDuration:0,
			snap:".elemento",
			snapMode:"inner",
			snapTolerance:40,
			start:function(event,ui){
				mov=mov+1;
				$("#movimientos-text").html(mov);}
		});
	}
	$(".elemento").droppable({
		drop:function (event,ui){
			var dropped=ui.draggable;
			var droppedOn=this;
			espera=0;
			do{
				espera=dropped.swap($(droppedOn));}
			while(espera==0);
			buscarHorizontales=horizontal();
			buscarVerticales=vertical();
			if(buscarHorizontales==0 && buscarVerticales==0){
				dropped.swap($(droppedOn));}
			if(buscarHorizontales==1 || buscarVerticales==1){
				clearInterval(nuevosDulces);
				clearInterval(eliminar);
				eliminar=setInterval(function(){
					eliminardulces()
				},150);}},
	});
};

//---------Función para intercambiar dulces-------------------------------------
jQuery.fn.swap=function(b){
	b=jQuery(b)[0];
	var a=this[0];
	var t=a.parentNode.insertBefore(document.createTextNode(''),a);
	b.parentNode.insertBefore(a,b);
	t.parentNode.insertBefore(b,t);
	t.parentNode.removeChild(t);
	return this;
};

//---------Función para crear nuevos dulces---------------------------------------------
function nuevosdulces(){
	$(".elemento").draggable({disabled:true});
	$("div[class^='col']").css("justify-content","flex-start")
	for(var j=1;j<8;j++){
		lencolum[j-1]=$(".col-"+j).children().length;}
	if(buscarNuevosDulces==0){
		for(var j=0;j<7;j++){
			lenrest[j]=(7-lencolum[j]);}
		maximo=Math.max.apply(null,lenrest);
		contadorTotal=maximo;}
	if(maximo!=0){
		if(buscarNuevosDulces==1){
			for(var j=1;j<8;j++){
				if(contadorTotal>(maximo-lenrest[j-1])){
					$(".col-"+j).children("img:nth-child("+(lenrest[j-1])+")").remove("img");}}
		}
		if(buscarNuevosDulces==0){
			buscarNuevosDulces=1;
			for(var k=1;k<8;k++){
				for(var j=0;j<(lenrest[k-1]-1);j++){
					$(".col-"+k).prepend("<img src='' class='elemento' style='visibility:hidden'/>");}}
		}
		for(var j=1;j<8;j++){
			if(contadorTotal>(maximo-lenrest[j-1])){
				numero=Math.floor(Math.random()*4)+1;
				imagen="image/"+numero+".png";
				$(".col-"+j).prepend("<img src="+imagen+" class='elemento'/>");}
		}
	}
	if(contadorTotal==1){
		clearInterval(nuevosDulces);
		eliminar=setInterval(function(){
			eliminardulces()
		},150);
	}
	contadorTotal=contadorTotal-1;
};

//----------Función para la busqueda horizontal de dulces----------------------------
function horizontal(){
	var busHori=0;
	for(var j=1;j<8;j++){
		for(var k=1;k<6;k++){
			var res1=$(".col-"+k).children("img:nth-last-child("+j+")").attr("src");
			var res2=$(".col-"+(k+1)).children("img:nth-last-child("+j+")").attr("src");
			var res3=$(".col-"+(k+2)).children("img:nth-last-child("+j+")").attr("src");
			if((res1==res2) && (res2==res3) && (res1!=null) && (res2!=null) && (res3!=null)){
				$(".col-"+k).children("img:nth-last-child("+(j)+")").attr("class","elemento activo");
				$(".col-"+(k+1)).children("img:nth-last-child("+(j)+")").attr("class","elemento activo");
				$(".col-"+(k+2)).children("img:nth-last-child("+(j)+")").attr("class","elemento activo");
				busHori=1;
				sonido.play();
				
			}
		}
	}
	return busHori;
};

//----------Función para la busqueda vertical de dulces------------------------------
function vertical(){
	var busVerti=0;
	for(var l=1;l<6;l++){
		for(var k=1;k<8;k++){
			var res1=$(".col-"+k).children("img:nth-child("+l+")").attr("src");
			var res2=$(".col-"+k).children("img:nth-child("+(l+1)+")").attr("src");
			var res3=$(".col-"+k).children("img:nth-child("+(l+2)+")").attr("src");
			if((res1==res2) && (res2==res3) && (res1!=null) && (res2!=null) && (res3!=null)){
				$(".col-"+k).children("img:nth-child("+(l)+")").attr("class","elemento activo");
				$(".col-"+k).children("img:nth-child("+(l+1)+")").attr("class","elemento activo");
				$(".col-"+k).children("img:nth-child("+(l+2)+")").attr("class","elemento activo");
				busVerti=1;
				sonido2.play();				
			}
		}
	}
	return busVerti;
};


