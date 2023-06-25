@extends('layout.master')

@section('style')
<style>
  #Darkrai{
    width: 42vh;
    height: 58vh;
    position: absolute;
    top: 3vh;
    left: 46vh;
  }
  #lateral_izq{
    background-color: #101010;
    width: 90vh;
    height: 66vh;
    position: absolute;
    top: 18vh;
    left: 53vh;
    border-radius:30px;
  }
  #elementos{
    width: 40vh;
    height: 60vh;
    position: absolute;
    top: 3vh;
    left: 3vh;
    color: white;
    font-size: large;
  }
  .dropdown{
    position: absolute;
    top: 7vh;
    left: 172vh;
  }
  #btn{
    width: 15vh;
  }
</style>
@endsection('style')


@section('content')
  <div id="contenido" >
    <br>
    <div class="dropdown" id="OpcionesUsuario">
      <a class="btn btn-dark dropdown-toggle btn-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Usuario 1
      </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
      </ul>
    </div>
    <div id="lateral_izq">
      <div id="elementos" class="m-2">
        <div id="titulo" class="r m-2 mb-5">
            <h1 class="d-flex justify-content-center" style="color: white;">Mi Perfil</h1>
        </div>
        <div>
            <p>Nombre:</p>
            <p> </p>
        </div>
        <div>
            <p>Usuario:</p>
            <p> </p>
        </div>
        <div>
            <p>Correo:</p>
            <p> </p>
        </div>
        <div>
            <p>Pokemons:</p>
            <p> </p>
        </div>
        <div class="mb-4">
            <p>Dinero:</p>
            <p> </p>
        </div>
        <div class="d-grid gap-2 d-md-block ">
            <a href="/inicio" class="btn btn-success" style="color: black" id="btn" type="button">Vover</a>  
            <a href="#" class="btn btn-info" id="btn" type="button">Editar</a>
        </div>
      </div>
      <img id="Darkrai" src="images/Darkrai.webp" alt="">
    </div>
    

  </div>
@endsection('content')