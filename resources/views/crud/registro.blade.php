@extends('layout.master')

@section('style')
<style>
    #contenido {
        background-color: 	#060606;
        border-radius: 40px;
        width: 60vh;
        height: 70vh;
        position: absolute;
        top: 20vh;
        left: 75vh;
        color:white;
        font-size: large;
    }
    .from-control{
        width: 60vh;
        height: 80vh;
    }
</style>
@endsection('style')

@section('script')

<script>
    $(document).ready(function(){
        $("#bt_registro").click(function () {
            var Nombre = $("#Nombre");
            var email = $("#email");
            var Contraseña = $("#Contraseña");
            var RepetirContra = $("#RepetirContra");

            if (Nombre.val() == "") {
                alert("Debe escribir su nombre"); 
                Nombre.focus();
            } else if (validarEmail(email.val()) == false) {
                alert("Correo no valido");
                email.focus();
            } else if (Contraseña.val() == "") {
                alert("Debe escribir una contraseña");
                Contraseña.focus();
            } else if (RepetirContra.val() != Contraseña.val()) {
                alert("Las contraseñas deben ser iguales");
                RepetirContra.focus();
            } 

            $('#form_registro').submit(function(){
                event.preventDefault();
                $.post("http://pokemonweb_infst8.test/api/usuarios",
                    $("#form_registro").serialize())
                    .done(function(data){
                        alert("Se a guardado correctamente");
                        var url = "http://pokemonweb_infst8.test/login";
                        $(location).attr('href', url);
                });
            });
        });
    });
                
        function validarEmail(valor) {
            if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
                    return true;
                    } else {
                    return false;
        }
    }
</script>

@endsection('script')



@section('content')
<div id="contenido">
    <div id="titulo" class="m-4 mb-3" >
        <div class="d-flex justify-content-center">
            <h1>Registro</h1>
        </div>
    </div>

    <form class="m-4" id="form_registro">
        <div class="mb-2">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre">
        </div>
        
        <div class="mb-2">
            <label for="Email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="Correo">
        </div>
        
        <div class="mb-2">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="Contraseña" name="Contraseña">
        </div>

        <div class="mb-3">
            <label for="Repetir Contra" class="form-label">Repetir Contraseña</label>
            <input type="password" class="form-control" id="RepetirContra">
        </div>  

        <div class="d-flex justify-content-center mb-2">
            <a href="/" class="btn btn-danger m-2 btn-lg">Cancelar</a>
            <button  type="submit" id="bt_registro" class="btn btn-success m-2 btn-lg">Registrarme</button>
        </div>
    </form>
    
</div>
@endsection('content')