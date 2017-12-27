var miJSON = [
  {
    "codigo":"001",
    "nombre":"Calculo",
  },
  {
    "codigo":"002",
    "nombre":"Fisica",
  },
  {
    "codigo":"003",
    "nombre":"Algoritmos",
  }
];

function leerJSON(json){
  for (i=0;i<json.length;i++){
    alert("Codigo:"+json[i].codigo+" Materia:"+json[i].nombre);
  }
}

leerJSON(miJSON);
