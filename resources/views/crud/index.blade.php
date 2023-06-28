@extends('layout.master')

@section('style')
    <style>
        #card {
            background-color: #060606;
            border-radius: 40px;
            width: 45vh;
            height: 35vh;
            position: absolute;
            top: 35vh;
            left: 78vh;
        }

        #btn {
            width: 24vh;
        }
    </style>
@endsection('style')


@section('content')
                

  <div id="contenido">
    <br><br><br><br><br><br>
    <div id="card">
      <br>
      <div id="titulo" class="mb-1" style="color: white;">
          <div class="d-flex justify-content-center" ><h1>Bienvenidos a</h1></div>
          <div class="d-flex justify-content-center"><h1>Pokemon Web</h1></div>
      </div>
      <div class="d-flex justify-content-center mb-2">
          <a href="/login" class="btn btn-danger btn-lg" id="btn">Acceder</a>
      </div>
      <div class="d-flex justify-content-center">
        <a href="#" class="btn btn-success btn-lg" id="btn">Registrarse</a>
      </div>
    </div>
@endsection('content')
