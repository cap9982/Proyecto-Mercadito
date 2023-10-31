let mostrador = document.getElementById("mostrador");
let seleccion = document.getElementById("seleccion");
let imgSeleccionada = document.getElementById("img");
let modeloSeleccionado = document.getElementById("modelo");
let descripSeleccionada = document.getElementById("descripcion");
let precioSeleccionado = document.getElementById("precio");

function cargar(item){
    quitarBordes();
    mostrador.style.width = "60%";
    seleccion.style.width = "40%";
    seleccion.style.opacity = "1";
    item.style.border = "2px solid red";

    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;

    modeloSeleccionado.innerHTML =  item.getElementsByTagName("p")[0].innerHTML;

    descripSeleccionada.innerHTML = "Descripción del modelo ";

    precioSeleccionado.innerHTML =  item.getElementsByTagName("span")[0].innerHTML;


}
function cerrar(){
    mostrador.style.width = "100%";
    seleccion.style.width = "0%";
    seleccion.style.opacity = "0";
    quitarBordes();
}
function quitarBordes(){
    var items = document.getElementsByClassName("item");
    for(i=0;i <items.length; i++){
        items[i].style.border = "none";
    }
}

function validarTabla(){
    //Obtenemos todos los tr de la tabla y los almacenamos en una variable tipo arreglo 
  var trs = document.querySelectorAll('#tablacontenido table tr');
  //Almacenamos en variables los elementos leyenda y la tabla
  var leyenda = document.getElementById('leyenda');
  var tabla   = document.querySelector('#tablacontenido table')
  
  //Si la cantidad de trs es mayor a 0 lo interpretará como verdadero
  if(trs.length){
    //Entonces ocultará la leyenda
    leyenda.style.display = 'none';
    //Y mostrará la tabla
    tabla.style.display = 'block';
  }else{
    // En caso de que la cantidad de tr sea 0 lo interpretará com falso
    // Y ocultará la tabla y mostrará la leyenda
    leyenda.style.display = 'block';
    tabla.style.display = 'none';
  }
}
validarTabla();
