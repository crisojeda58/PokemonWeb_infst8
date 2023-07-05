@extends('layout.master')

@section('style')
 <style>
  #contenido {
    background-color: #ffff;
    border-radius: 20px;
    padding: 3vh;
    color:black; 
    width: 180vh;
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
                  tr.push('<td>' + json[i].N + '</td>');
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
  <div id= "contenido">
    <h2>Pokedex</h2>
    <table class="table" id="tabla_pokedex" >
      <thead>
        <tr>
          <th>N°</th>
          <th>Pokemon</th>
          <th>Descripcion</th>
          <th>Estadisticas</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  
@endsection