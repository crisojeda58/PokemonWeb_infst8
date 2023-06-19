@extends('layout.master')

@section('style')
<style>
  #entrenador{
    background-color: #101010;
    width: 37vh;
    height: 60vh;
    position: absolute;
    top: 20vh;
    left: 100vh;
  }
  #lateral_izq{
    background-color: #101010;
    width: 40vh;
    height: 60vh;
    position: absolute;
    top: 20vh;
    left: 60vh;
  }
  #btn{
      width: 28vh;
    }
</style>
@endsection('style')


@section('content')
  <div id="contenido" >
    <br>
    <div id="lateral_izq">
      <div id="titulo" class="r m-4">
          <h1 class="d-flex justify-content-center" style="color: white;">Hola de nuevo</h1>
          <h1 class="d-flex justify-content-center" style="color: white;">entrenador</h1>
      </div>
      <div class="d-flex justify-content-center mb-3">
          <a href="#" class="btn btn-dark btn-lg" id="btn">Recompensa diaria</a>
      </div>
      <div class="d-flex justify-content-center mb-3">
          <a href="#" class="btn btn-primary btn-lg" id="btn">Jugar</a>
      </div>
      <div class="d-flex justify-content-center mb-3">
          <a href="#" class="btn btn-success btn-lg" id="btn">Ver Mapa regional</a>
      </div>
      <div class="d-flex justify-content-center mb-3">
          <a href="#" class="btn btn-danger btn-lg" id="btn">Ver pokedex</a>
      </div>
      <div class="d-flex justify-content-center">
          <a href="#" class="btn btn-warning btn-lg" id="btn">Ver Inventario</a>
      </div>
    </div>
    <img id="entrenador" src="images/Trainer.webp" alt="">

  </div>
@endsection('content')