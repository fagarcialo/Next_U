var valor = '';
var valor1 = '';
var valor2 = '';
var operador = '';
var operando = false;

function presiona_boton (tecla){
  document.getElementById(tecla).addEventListener("click", function() {
                                                                    document.getElementById(tecla).style.transform="scale(0.9)";
                                                                    setTimeout(function () {
                                                                                            document.getElementById(tecla).style.transform="scale(1)";
                                                                                            }, 200);
                                                                  });
  document.getElementById(tecla).addEventListener("click", function() {
    var resultado = 0;

    //borramos las variables
    if (tecla == 'on')
    {
      valor ='';
      valor1 ='';
      valor2 ='';
      document.getElementById('display').innerHTML = '0';
    }
    else if(tecla == 'mas')//boton suma
    {
      //resultado = valor_display.value + 5;
      operador = '+';
      valor1 = valor;
      valor ='';
      operando = true;
      document.getElementById('display').innerHTML = '';
    }
    else if(tecla == 'menos')//boton resta
    {
      //resultado = valor_display.value + 5;
      operador = '-';
      valor1 = valor;
      valor ='';
      operando = true;
      document.getElementById('display').innerHTML = '';
    }
    else if(tecla == 'por')//boton multiplica
    {
      //resultado = valor_display.value + 5;
      operador = '*';
      valor1 = valor;
      valor ='';
      operando = true;
      document.getElementById('display').innerHTML = '';
    }
    else if(tecla == 'dividido')//boton divide
    {
      //resultado = valor_display.value + 5;
      operador = '/';
      valor1 = valor;
      valor ='';
      operando = true;
      document.getElementById('display').innerHTML = '';
    }
    else if(tecla == 'igual')//boton igual
    {
      //valor2 = valor;
      if (operando == false)
      {
        valor2 = valor;
      }

      if (operador == '+')
      {
          resultado = Number(valor1) + Number(valor2);
      }
      else if (operador == '-')
      {
          resultado = Number(valor1) - Number(valor2);
      }
      else if (operador == '*')
      {
          resultado = Number(valor1) * Number(valor2);
      }
     else if (operador == '/')
      {
          resultado = Number(valor1) / Number(valor2);
      }
      valor1 = resultado;
      valor = resultado;
      operando = true;



      resultado = resultado.toString();
      resultado = resultado.substr(0,8);
      document.getElementById('display').innerHTML = resultado;
    }
    else if(tecla == 'punto')//boton punto
    {
      var ult_posicion = valor.substr(valor.length-1,1);
      if (ult_posicion != '.')
      {
        valor = valor + '.';
        document.getElementById('display').innerHTML = valor;
      }
    }
    else if(tecla == 'sign')//boton signo
    {
      valor = Number(valor) * -1;
      document.getElementById('display').innerHTML = valor;
    }
    else //botones numeros
    {
      var longitud = valor.length;
      operando = false;
      //si en la pantalla hay un solo numero cero, y digitan otro cero, no debe hacer nada
      if (tecla == '0' && valor == '0')
      {
        valor = '';
        document.getElementById('display').innerHTML = '0';
      }
      else {
        //para que no permita mas de 8 digitos en la pantalla
        if (longitud < 9)
          {
              valor = valor + tecla;
              document.getElementById('display').innerHTML = valor;
          }
      }
    }
  });

}

/*Se inicializa cada boton*/
presiona_boton('0');
presiona_boton('1');
presiona_boton('2');
presiona_boton('3');
presiona_boton('4');
presiona_boton('5');
presiona_boton('6');
presiona_boton('7');
presiona_boton('8');
presiona_boton('9');
presiona_boton('on');
presiona_boton('sign');
presiona_boton('raiz');
presiona_boton('dividido');
presiona_boton('por');
presiona_boton('menos');
presiona_boton('mas');
presiona_boton('punto');
presiona_boton('igual');


/*
document.getElementById('7').addEventListener("click", function() {
                                                                  document.getElementById("7").style.transform="scale(0.9)";
                                                                  setTimeout(function () {
                                                                                          document.getElementById("7").style.transform="scale(1)";
                                                                                          }, 200);
                                                                });







/*var pantalla = document.getElementById('display');
var tecla_on = document.getElementById('on');
var tecla_mas = document.getElementById('mas');
var tecla_menos = document.getElementById('menos');
var tecla_por = document.getElementById('por');
var tecla_dividido = document.getElementById('dividido');

var tecla_1 = document.getElementById('1');
var tecla_2 = document.getElementById('2');
var tecla_3 = document.getElementById('3');
var tecla_4 = document.getElementById('4');
var tecla_5 = document.getElementById('5');
var tecla_6 = document.getElementById('6');
var tecla_7 = document.getElementById('7');
var tecla_8 = document.getElementById('8');
var tecla_9 = document.getElementById('9');
var tecla_0 = document.getElementById('0');

tecla_on.addEventListener("click",function(event){
  //var mensaje = "Hiciste click en la posicion ->  X: "+event.clientX+" Y: "+event.clientY;
  //console.log(mensaje);
  //alert(mensaje);
  tecla_on.style.width = "15%";
  tecla_on.style.height = "15%";
})

tecla_mas.addEventListener("click",function(event){
  tecla_mas.style.width = "15%";
  tecla_mas.style.height = "15%";
})

tecla_menos.addEventListener("click",function(event){
  tecla_menos.style.width = "15%";
  tecla_menos.style.height = "15%";
})

tecla_por.addEventListener("click",function(event){
  tecla_por.style.width = "15%";
  tecla_por.style.height = "15%";
})

tecla_dividido.addEventListener("click",function(event){
  tecla_dividido.style.width = "15%";
  tecla_dividido.style.height = "15%";
})

tecla_1.addEventListener("click",function(event){
  tecla_1.style.width = "15%";
  tecla_1.style.height = "15%";
})

tecla_2.addEventListener("click",function(event){
  tecla_2.style.width = "15%";
  tecla_2.style.height = "15%";
})

tecla_3.addEventListener("click",function(event){
  tecla_3.style.width = "15%";
  tecla_3.style.height = "15%";
})

tecla_4.addEventListener("click",function(event){
  tecla_4.style.width = "15%";
  tecla_4.style.height = "15%";
})

tecla_5.addEventListener("click",function(event){
  tecla_5.style.width = "15%";
  tecla_5.style.height = "15%";
})

tecla_6.addEventListener("click",function(event){
  tecla_6.style.width = "15%";
  tecla_6.style.height = "15%";
})



tecla_8.addEventListener("click",function(event){
  tecla_8.style.width = "15%";
  tecla_8.style.height = "15%";
})

tecla_9.addEventListener("click",function(event){
  tecla_9.style.width = "15%";
  tecla_9.style.height = "15%";
})

tecla_0.addEventListener("click",function(event){
  tecla_0.style.width = "15%";
  tecla_0.style.height = "15%";
})*/
