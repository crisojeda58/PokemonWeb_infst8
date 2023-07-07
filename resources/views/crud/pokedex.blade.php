@extends('layout.master')

@section('style')
 <style>
  #contenido {
    background-color: #ffff;
    border-radius: 20px;
    padding: 3vh;
    color:black; 
    width: 160vh;
    position: absolute;
    top: 10vh;
    left: 15vh;
  }
  .dropdown{
    position: absolute;
    top: 10vh;
    left: 178vh;
  }
 </style>
@endsection

@section('script')
  <script>
    $(document).ready(function() {
          $.getJSON('http://pokemonweb_infst8.test/api/pokedexes', function(json) {
            console.log(json);
            var tr = []; 
              for (var i=0 ; i < json.length; i++) {
                tr.push('<tr>');
                  tr.push('<th>' + json[i].N + '</th>');
                  tr.push('<td>' + json[i].Especie + '</td>');
                  tr.push('<td>' + json[i].Descripcion + '</td>');
                  tr.push('<td>' + json[i].Estadisticas + '</td>');
                tr.push('</tr>');
              }
              
              $('#tabla_pokedex tbody').append($(tr.join('')));
          });
    });
  </script>
@endsection

@section('content')
    <div class="dropdown" id="OpcionesUsuario">
      <a class="btn btn-dark dropdown-toggle btn-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Usuario 1
      </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
      </ul>
    </div>
  <div id= "contenido">
    
    <h2>Pokedex</h2>
    <table class="table" id="tabla_pokedex" >
      <thead>
        <tr>
          <th>N°</th>
          <th>POKEMON</th>
          <th>DESCRIPCION</th>
          <th>ESTADISTICAS</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  
@endsection