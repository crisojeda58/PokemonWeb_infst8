@extends('layout.master')

@section('style')
    <style>
        #contenido{
            background-color: white;
            border-radius: 20px;
            padding: 3vh;
            color: black;
            width: 160vh;
            position: absolute;
            top: 10vh;
            left: 15vh;
            font-family: Arial, sans-serif;
        }
        .dropdown{
            position: absolute;
            top: 10vh;
            left: 178vh;
        }

        h1 {
            color: white;
        }
    
    </style>
@endsection('style')

@section('script')

<script>
    $(document).ready(function() {
          $.getJSON('http://pokemonweb_infst8.test/api/items', function(json) {
            console.log(json);
            var tr = []; 
              for (var i=0 ; i < json.length; i++) {
                tr.push('<tr>');
                  tr.push('<td>' + json[i].Nombre + '</td>');
                  tr.push('<td>' + json[i].Descripcion + '</td>');
                  tr.push('<td>' + json[i].Cantidad + '</td>');
                  tr.push('<td>' + json[i].Ataque + '</td>');
                  tr.push('<td>' + json[i].Defensa + '</td>');
                tr.push('</tr>');
              }
              
              $('#tabla_items tbody').append($(tr.join('')));
          });
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
@endsection('script')

@section('content')
    
<div id="contenido">
    <h1 style="color: black">Inventario</h1>

    <table id="tabla_items" class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Ataque</th>
                <th>Defensa</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
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

@endsection('content')
