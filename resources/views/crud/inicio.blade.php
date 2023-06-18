@extends('layout.master')

@section('style')
<style>
  #entrenador{
    width: 35vh;
    height: 55vh;
    position: absolute;
    top: 140px;
    left: 400px;
  }
  #contenido{
    opacity: 1.2;
  }
</style>
@endsection('style')

@section('content')
  <div id="contenido" >
    <br>
    <div id="titulo" class="m-4">
        <h1 style="color: black;">Hola de nuevo</h1>
        <h1 style="color: black;">entrenador</h1>
    </div>
    <div id="botones" class="d-grid gap-2 justify-content-md-start m-4">
        <a href="#" class="btn btn-dark btn-lg mb-3">Recompensa diaria</a>
        <a href="#" class="btn btn-primary btn-lg mb-3">Jugar</a> 
        <a href="#" class="btn btn-success btn-lg mb-3">Ver Mapa regional</a>
        <a href="#" class="btn btn-danger btn-lg mb-3">Ver pokedex</a>
        <a href="#" class="btn btn-warning btn-lg mb-3">Ver Inventario</a>
    </div>
    <img id="entrenador" src="images/Trainer.webp" alt="">
  </div>
@endsection('content')