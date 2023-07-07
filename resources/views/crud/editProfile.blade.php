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
  }
  .dropdown{
    position: absolute;
    top: 8vh;
    left: 172vh;
  }
  #btn{
    width: 18vh;
  }
  form{
    width: 10vh;
  }
</style>
@endsection('style')

@section('script')
<script>
  $(document).ready(function() {
      $.getJSON('http://pokemonweb_infst8.test/api/usuarios', function(json) {
        var id_user = 0;
        var div = []; 
          for (var i = 0; i < 1; i++) {
            
            div.push('<div>');
                div.push('<label for="Nombre" class="form-label">Nombre</label>')
                div.push('<input type="text" id="Nombre" class="form-control mb-2" placeholder="' + json[id_user].Nombre + '">');
            div.push('</tr>');

            div.push('<tr>');
                div.push('<label for="Correo" class="form-label">Correo</label>')
                div.push('<input type="text" id="Correo" class="form-control mb-2" placeholder="' + json[id_user].Correo + '">');
            div.push('</tr>');
            
            div.push('<tr>');
            div.push('<label for="Contraseña" class="form-label">Nueva Contraseña</label>')
                div.push('<input type="password" id="Contraseña" class="form-control mb-2" placeholder="********">');
            div.push('</tr>');

            div.push('<tr>');
            div.push('<label for="RepContraseña" class="form-label">Repita Contraseña</label>')
                div.push('<input type="password" id="RepContraseña" class="form-control mb-2" placeholder="********">');
            div.push('</tr>');

          }
          $('#datos_user #imputs').append($(div.join('')));
      });
  });
</script>
@endsection('script')


@section('content')
  <div id="contenido" >
    <br>
    <div class="dropdown" id="OpcionesUsuario">
      <a class="btn btn-dark dropdown-toggle btn-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Cristian
      </a>

      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
      </ul>
    </div>
    <div id="lateral_izq">
      <div id="elementos" class="m-2">
        <div id="titulo" class="r m-2 mb-3">
            <h1 class="d-flex justify-content-center" style="color: white;">Mi Perfil</h1>
        </div>
        <div >
            <from id="datos_user" style="color: white; font-size: large;">
                <div id="imputs">

                </div>
                <div class="d-grid gap-2 d-md-block m-2">
                    <a href="/perfil" class="btn btn-success" id="btn" type="button">Cancelar</a>  
                    <a href="/perfil" class="btn btn-info" id="btn" type="submit">Guardar</a>
                </div> 
            </from>
        </div>
        
        
      </div>
      <img id="Darkrai" src="images/Darkrai.webp" alt="">
    </div>
    

  </div>
@endsection('content')