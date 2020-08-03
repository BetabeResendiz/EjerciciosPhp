function generar(){

    document.getElementById("carta").style.display='block';
  
    var titulo = document.getElementById("titulom").value;
    document.getElementById("titulo").innerHTML = titulo;
  
    var subtitulo =document.getElementById("subtitulom").value;
    document.getElementById("subtitulo").innerHTML = subtitulo;
  
    var autor = document.getElementById("autorm").value;
    document.getElementById("autor").innerHTML = autor;
  
    var mensaje = document.getElementById("mensajem").value;
    document.getElementById("mensaje").innerHTML = mensaje;

    var mensaje = document.getElementById("fecham").value;
    document.getElementById("fecha").innerHTML = mensaje;
  
  
  
  
    var i;
  
    var a = document.getElementsByName("a");
    var b = document.getElementsByName("b");
    var c = document.getElementsByName("color");
  
  
    for( i = 0; i < a.length; i++){
      if(a[i].checked){
        var e = a[i].value;

      } 
    }
  
    for( i = 0; i < b.length; i++){
      if(b[i].checked){
        var n = b[i].value;
      } 
    }
  
    for( i = 0; i < c.length; i++){
      if(c[i].checked){
        var m = c[i].value;
      } 
    }
  
  
    switch (n) {
      case 'a':
        document.getElementById("img").src="imagenes/feliz.jpg";
        document.getElementById("audio").src="audio/bonjovi.mp3";
        break;
        case 'b':
          document.getElementById("img").src="imagenes/amor.jpg";
          document.getElementById("audio").src="audio/feliz.mp3"
          break;
          case 'c':
            document.getElementById("img").src="imagenes/motivacion.jpg";
            document.getElementById("audio").src="audio/guerra.mp3"
            break;
    
      default:
        imgop='nada';
        break;
    }
  
    switch (m) {
      case 'a':
        document.getElementById("carta").style.backgroundColor="rgb(223, 43, 43)";
        break;
        case 'b':
          document.getElementById("carta").style.backgroundColor="rgb(77, 119, 197)";
          break;
          case 'c':
            document.getElementById("carta").style.backgroundColor="rgb(92, 170, 56)";
            break;
            case 'd':
              document.getElementById("carta").style.backgroundColor="rgb(255, 208, 0)";
              break;
  
  
    
      default:
        colorop='nada';
        break;
    }
  
    
  
    
  }