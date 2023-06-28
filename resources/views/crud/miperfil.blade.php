@extends('layout.master')

@section('style')
<style>
  #Darkrai{
    width: 42vh;
    height: 58vh;
    position: absolute;
    top: 3vh;
    left: 47vh;
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
    top: 8vh;
    left: 172vh;
  }
  #btn{
    width: 18vh;
  }
  table{
    width: 10vh;
  }
</style>
@endsection('style')

@section('script')
<script>
  $(document).ready(function() {
      $.getJSON('http://pokemonweb_infst8.test/api/usuarios', function(json) {
        var tr = []; 
          for (var i = 0, i > json.length; i++) {
            tr.push('<tr>');
              tr.push('<th>Nombre: </th>');
              tr.push('<td>' + json[i].Nombre + '</td>');
            tr.push('</tr>');

            tr.push('<tr>');
              tr.push('<th>Usuario: </th>');
              tr.push('<td>' + json[i].Usuario + '</td>');
            tr.push('</tr>');
            
            tr.push('<tr>');
              tr.push('<th>Correo: </th>');
              tr.push('<td>' + json[i].Correo + '</td>');
            tr.push('</tr>');

          }
          $('#datos_user tbody').append($(tr.join('')));
      });
  });
</script>
@endsection('script')


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
        <div >
         <table class="table" id="datos_user" style="color: white; border: black">
          <tbody class="mb-3" >
            <tr>
              <th scope="col">Nombre:  </th>
              <td scope="col">Cristian</td>
            </tr>
            <tr>
              <th scope="col">Usuario:  </th>
              <td scope="col">Cris</td>
            </tr>
            <tr>
              <th scope="col">Correo:  </th>
              <td scope="col">cris.ojeda.CO@gmail.com</td>
            </tr>
            <tr>
              <th scope="col">Pokemons:  </th>
              <td scope="col">4</td>
            </tr>
            <tr>
              <th scope="col">Monedas:  </th>
              <td scope="col">500</td>
            </tr>
          </tbody>
         </table>
        </div>
        
        <div class="d-grid gap-2 d-md-block m-2">
            <a href="/inicio" class="btn btn-success" style="color: black" id="btn" type="button">Vover</a>  
            <a href="#" class="btn btn-info" id="btn" type="button">Editar</a>
        </div>
      </div>
      <img id="Darkrai" src="images/Darkrai.webp" alt="">
    </div>
    

  </div>
@endsection('content')