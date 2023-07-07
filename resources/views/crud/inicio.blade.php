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
    width: 42vh;
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
    top: 8vh;
    left: 172vh;
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
        <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
      </ul>
    </div>
    <div id="lateral_izq">
      <div id="elementos">
        <div id="titulo" class="r m-2 mb-3">
            <h1 class="d-flex justify-content-center" style="color: white;">Hola de nuevo</h1>
            <h1 class="d-flex justify-content-center" style="color: white;">entrenador</h1>
        </div>
         <div class="d-flex justify-content-center mb-3">
          <a href="/dailyreward" class="btn btn-dark btn-lg" id="btn">Recompensa diaria</a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a href="#" class="btn btn-light btn-lg" id="btn">Ruleta</a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a href="/mapa" class="btn btn-success btn-lg" id="btn">Mapa Regional</a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a href="/pokedex" class="btn btn-danger btn-lg" id="btn">Pokedex</a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="/inventario" class="btn btn-warning btn-lg" id="btn">Inventario</a>
        </div>
        
      </div>
      <img id="entrenador" src="images/Trainer.webp" alt="">
    </div>
    

  </div>
@endsection('content')