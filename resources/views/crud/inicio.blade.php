@extends('layout.master')

@section('style')
<style>
  #entrenador{
    width: 36vh;
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
  }
  #btn{
      width: 28vh;
  }
  .dropdown{
    position: absolute;
    top: 7vh;
    left: 172vh;
  }
</style>
@endsection('style')


@section('content')
  <div id="contenido" >
    <br>
    <div class="dropdown" id="OpcionesUsuario">
      <a class="btn btn-dark dropdown-toggle btn-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Cristian
      </a>

      <ul class="dropdown-menu">
<<<<<<< Updated upstream
        <li><a class="dropdown-item" href="#">Editar perfil</a></li>
        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
=======
        <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
        <li><a class="dropdown-item" href="/">Cerrar Sesion</a></li>
>>>>>>> Stashed changes
      </ul>
    </div>
    <div id="lateral_izq">
      <div id="elementos">
        <div id="titulo" class="r m-4">
            <h1 class="d-flex justify-content-center" style="color: white;">Hola de nuevo</h1>
            <h1 class="d-flex justify-content-center" style="color: white;">entrenador</h1>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <a href="/dailyreward" class="btn btn-light btn-lg" id="btn">Recompensa diaria</a>
        </div>
<<<<<<< Updated upstream
        <div class="d-flex justify-content-center mb-4">
=======
        <div class="d-flex justify-content-center mb-3">
            <a href="/ruleta" class="btn btn-light btn-lg" id="btn">Ruleta</a>
        </div>
        <div class="d-flex justify-content-center mb-3">
>>>>>>> Stashed changes
            <a href="/mapa" class="btn btn-success btn-lg" id="btn">Mapa Regional</a>
        </div>
        <div class="d-flex justify-content-center mb-4">
            <a href="#" class="btn btn-danger btn-lg" id="btn">Pokedex</a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-warning btn-lg" id="btn">Inventario</a>
        </div>
      </div>
      <img id="entrenador" src="images/Trainer.webp" alt="">
    </div>
    

  </div>
@endsection('content')