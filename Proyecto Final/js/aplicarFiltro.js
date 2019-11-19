
function aplicarFiltro(){

  var x = document.getElementById("select-filtro").value;

  if(x != "Sin Filtro"){

    if(x == "blur")
      document.getElementById("imagen_pequena").style.webkitFilter =  x +"(2px)";
    else if(x =="brightness" || x =="contrast" || x =="grayscale" || x =="invert" || x =="opacity" || x =="saturate" || x =="sepia" )
      document.getElementById("imagen_pequena").style.webkitFilter =  x +"(0.3)";
    else if(x == "hue-rotate")
      document.getElementById("imagen_pequena").style.webkitFilter =  x +"(90deg)";
  }else{
    document.getElementById("imagen_pequena").style.webkitFilter =  "blur(0px)";
  }

}