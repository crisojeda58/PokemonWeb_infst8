@extends('layout.master')
@section('style')
  <style>
   #contenedorDerecha{
      background-color: link;
      border-radius: 30px;
      position: absolute;
      width: 85vh;
      height: 85vh;
      left: 95vh;
      top:12vh;
   }
   #contenedorUsuarios{
      background-color: #fff;
      border-radius: 30px;
      position: absolute;
      width: 24.6vh;
      height: 50vh;
      left: 150.9vh;
      top:14vh;
      display:none; 
   }
   #listadoUsuarios{
    padding:6px;
   }
   #contenidoChat{
      background-color: #fff;
      border-radius:10px;
      
      position: absolute;
      width: 49.6vh;
      height: 75.2vh;
      left: 99.5vh;
      top:14vh;
      display:none;
   }
   #caja-chat{
    width: 45.6vh;
    height:14vh;
    top:14vh;
   }
   #chat{

   }
   #datos-chat{
    margin-top: 5px;
    padding:5px;
    border-bottom:1px solid silver;
   }
   input[type="text"]{
      width:32vh;
      height:5vh;
      
    }
    input[type="submit"]{
      position:absolute;
      top:65vh;
      width:10vh;
      height:5vh;
      left: 33.7vh;
      border-radius:1.1vh;
     
    }
    textarea{
      position: absolute;
      width:32vh;
      height:5vh;
      border-radius:1.1vh;
      left:1.3vh;
      top:65vh;
    }
    input, textarea{
      margin-bottom:1.9vh;
      
    }
    
   #contenedorIzquierda{
      background-color: 	#060606;
      border-radius: 60px;
      position: absolute;
      width: 85vh;
      height: 85vh;
      left: 2vh;
      top:12vh;

      
    }  
    #MapaConBTN{
      width: 70vh;
      position: absolute;
      left:-53.3vh;
      top:9.5vh;
    }
    #botones{
     
      width: 30vh;
      height: 35vh;
      position: absolute;
      top: 16vh;
      left: 78vh;
    }
    #mapa{
      width: 70vh;
      position: absolute;
      left: 62vh;
      top:24vh;
    }
    #CentroPokemonBTN{  
      position: absolute;
      top: 41vh;
      left: 8vh;
      width: 6vh;
      height: 5vh;
    }
    #MuseoBTN{
      position: absolute;
      top: 10.3vh;
      left: 4.5vh;
      width: 15vh;
      height: 7vh;
    }  
    #TiendaBTN{
      position: absolute;
      top: 33vh;;
      left: 24vh;
      width: 5vh;
      height: 4vh;
    }
    #GymBTN{
      position: absolute;
      top: 26.5vh;
      left: 5.5vh;
      width: 8.3vh;
      height: 5vh;
    }
    
  </style>
@endsection('style')


@section('content')
  <div id="contenido">
    <!--Contenido del contenedor derecho-->
    <div id ="contenedorDerecha">
     
    </div>
    <!--Contenido de Usuarios Conectados-->
    <div id ="contenedorUsuarios">
      <h3 id ="tituloUsuarios"  class="m-3 d-flex justify-content-center" style=" border-bottom: 1px solid silver;"> Usuarios Conectados</h3>
      <div id="listadoUsuarios">
      <li>Usuario 1</li>
      <li>Usuario 2</li>
      <li>Usuario 3</li>
      </div>
    </div>
    <!--Contenido de Usuarios Conectados FN-->

    <!--Contenido del Chat-->
    <div id="contenidoChat">
    <div id ="caja-chat">
        <div id ="chat">
          <div id="datos-chat">
            <h3 id="tituloChat"class="d-flex justify-content-center"style=" border-bottom: 1px solid silver;">Chat </h3>
            <span style="color: #26C6DA;">Jenny:</span>
            <span> hola como estas</span>
            <span style="float: right;">10:04 pm </span>
          </div>
        </div>
      </div>
      <form method="POST" action= "mapa.blade.php">  
       <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
       <input type="submit" name="enviar" value="Enviar">
      </form>
    </div>
    <!--Contenido del Chat FN-->

    <!--Contenido del contenedor derecho FN-->

    <!--Contenido del contenedor Izquierdo-->
    
    <div id="contenedorIzquierda">  

      <!--Contenido del MAPA-->
      
      <!--Contenido del MAPA titulo-->

      <div id="TituloMapa" class ="m-3" style="color: white;">
        <h1 class="d-flex justify-content-center">Bienvenidos al</h1>
        <h1 class="d-flex justify-content-center">Mapa de Pokemon</h1>
        <h2 class="d-flex justify-content-center">Seleccione una Ubicación</h2>
      </div>
      <!--Contenido del MAPA titulo FN-->
    </div>
      <!--Contenido del MAPA con BOTONES-->  
       <div id="MapaConBTN"> 
          <img id="mapa" src="images/MapaPokemon.png" alt="">
          
          <div id="botones">
                     
            <div id= "CentroPokemonBTN" class="d-flex justify-content-center mb-2">
             <a href="#" class="btn btn-link " id="centroPokemonBtn"  onclick="mostrarContenedorChat('Centro Pokémon')">    </a> 
            </div>
            <div  id="MuseoBTN"class="d-flex justify-content-center">
              <a href="#" class="btn btn-link " id="museoBtn"onclick="mostrarContenedorChat('Museo')"></a>
            </div>

            <div id= "TiendaBTN" class="d-flex justify-content-center mb-2">
              <a href="#" class="btn btn-link " id="tiendaBtn" onclick="mostrarContenedorChat('Tienda')">  </a>
            </div>
            <div  id="GymBTN"class="d-flex justify-content-center">
              <a href="#" class="btn btn-link " id="gimnasioBtn" onclick="mostrarContenedorChat('Gimnasio')"></a>
            </div>
          </div>
          <!--Contenido del MAPA con BOTONES FN-->
       </div>

   </div>
   <script>
    function mostrarContenedorChat(ubicacion) {
      var contenedorChat = document.getElementById("contenidoChat");
      var contenedorUsuarios = document.getElementById("contenedorUsuarios");
      var tituloChat = document.getElementById("tituloChat");

      tituloChat.innerText = "Chat" + ubicacion;

      contenedorChat.style.display = "block";
      contenedorUsuarios.style.display = "block";
     
    }
    
  </script>
@endsection('content')