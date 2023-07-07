@extends('layout.master')

@section('style')
  <style>
   
   #contenedor{
      background-color: 	#060606;
      border-radius: 60px;
      position: absolute;
      width: 85vh;
      height: 85vh;
      left: 62vh;
      top:12vh;

      
    }  
    #MapaConBTN{
      width: 70vh;
      position: absolute;
      left:7.3vh;
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
      border :2px solid black;
      
    }
    #MuseoBTN{
      position: absolute;
      top: 10.3vh;
      left: 4.5vh;
      width: 15vh;
      height: 7vh;
      border :2px solid black;
    }  
    #TiendaBTN{
      position: absolute;
      top: 33vh;;
      left: 24vh;
      width: 5vh;
      height: 4vh;
      border :2px solid black;
    }
    #GymBTN{
      position: absolute;
      top: 26.5vh;
      left: 5.5vh;
      width: 8.3vh;
      height: 5vh;
      border :2px solid black;
    }
<<<<<<< Updated upstream
=======
    .dropdown{
      position: absolute;
      top: 8vh;
      left: 176vh;
    }
    
>>>>>>> Stashed changes
  </style>
@endsection('style')


@section('content')
<<<<<<< Updated upstream
  <div id="contenido">
    <div id="contenedor">  
    <div id="TituloMapa" class ="m-3" style="color: white;">
=======
  
<div class="dropdown" id="OpcionesUsuario">
      <a class="btn btn-dark dropdown-toggle btn-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Cristian
      </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
        <li><a class="dropdown-item" href="/">Cerrar Sesion</a></li>
      </ul>
    </div>  
<div id="contenido">
    <!--Contenido del contenedor derecho-->
    <div id ="contenedorDerecha">
     
    </div>
    <!--Contenido de Usuarios Conectados-->
    <div id ="contenedorUsuarios">
      <h3 id ="tituloUsuarios"  class="m-3 d-flex justify-content-center" style=" border-bottom: 1px solid silver;"> Usuarios Conectados</h3>
      <div id="listadoUsuarios">
      <li>Cristian</li>
      <li>Santos</li>
      <li>Luciano</li>
      </div>
    </div>
    <!--Contenido de Usuarios Conectados FN-->

    <!--Contenido del Chat-->
    <div id="contenidoChat">
    <div id ="caja-chat">
        <div id ="chat">
          
          <div id="datos-chat">
            <h3 id="tituloChat"class="d-flex justify-content-center"style=" border-bottom: 1px solid silver;">Chat </h3>
            <span style="color: #26C6DA;">usuario:</span>
            <span> mensaje</span>
            <span style="float: right;">10:04 pm </span>
          </div>
        
        </div>
      </div>
      <form method="POST" >  
       <textarea id="mensaje" name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
       <input type="submit" name="enviar" value="Enviar"></input>
      </form>
      
    </div>
    <!--Contenido del Chat FN-->

    <!--Contenido del contenedor derecho FN-->

    <!--Contenido del contenedor Izquierdo-->
    
    <div id="contenedorIzquierda">  

      <!--Contenido del MAPA-->
      
      <!--Contenido del MAPA titulo-->

      <div id="TituloMapa" class ="m-3" style="color: white;">
>>>>>>> Stashed changes
        <h1 class="d-flex justify-content-center">Bienvenidos al</h1>
        <h1 class="d-flex justify-content-center">Mapa de Pokemon</h1>
      </div>
    </div>  
      
       <div id="MapaConBTN"> 
          
          
          <img id="mapa" src="images/MapaPokemon.png" alt="">
          <div id="botones">
                     
            <div id= "CentroPokemonBTN" class="d-flex justify-content-center mb-2">
             <a href="#" class="btn btn-link " id="btn">  </a> 
            </div>
            <div  id="MuseoBTN"class="d-flex justify-content-center">
              <a href="#" class="btn btn-link " id="btn"></a>
            </div>

            <div id= "TiendaBTN" class="d-flex justify-content-center mb-2">
              <a href="/login" class="btn btn-link " id="btn">  </a>
            </div>
            <div  id="GymBTN"class="d-flex justify-content-center">
              <a href="#" class="btn btn-link " id="btn"></a>
            </div>
          </div>
       </div>
   </div>
@endsection('content')
