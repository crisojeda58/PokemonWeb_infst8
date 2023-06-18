@extends('layout.master')

@section('style')
  <style>
  </style>
@endsection('style')


@section('content')
  <div id="contenido">
    <br><br><br><br><br><br>
    <div id="card">
      <br>
      <div id="titulo" style="color: black;">
          <div class="d-flex justify-content-center" ><h1>Bienvenidos a</h1></div>
          <div class="d-flex justify-content-center"><h1>Pokemon Web</h1></div>
      </div>
      <div class="d-grid gap-2 col-2 mx-auto">
          <a href="#" class="btn btn-danger btn-lg">Acceder</a>
          <a href="#" class="btn btn-success btn-lg">Registrarse</a>
      </div>
    </div>
  </div>
@endsection('content')
