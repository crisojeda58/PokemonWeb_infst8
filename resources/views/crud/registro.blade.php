@extends('layout.master')

@section('style')
<style>
    #contenido {
        background-color: 	#060606;
        border-radius: 40px;
        width: 60vh;
        height: 80vh;
        position: absolute;
        top: 25vh;
        left: 75vh;
        color:white;
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

        $('#form-login').submit(function(event){
            event.preventDefault();
            $.post("http://pokemonweb_infst8.test/api/usuarios",
            $("#form-login").serialize())
            .done(function(data){
                alert("Se a guardado correctamente");
                var url = "http://pokemonweb_infst8.test/inicio";
                $(location).attr('href', url);

                    var Nombre = $("#Nombre");
                    var email = $("#email");
                    var Contraseña = $("#Contraseña");
                    var RepetirContra = $("#RepetirContra");

                    if (Nombre.val() == "") {
                        //$("#Nombre_help_block").show();
                        alert("Error en nombre"); 
                        Nombre.focus();
                    } else if (Contraseña.val() == "") {
                        alert("Error en pass");
                        Contraseña.focus();
                    } else if (Contraseña.val() != RepetirContra.val()) {
                        alert("Las contraseñas deben ser iguales");
                        Contraseña.focus();
                    } else if (validarEmail(email.val()) == false) {
                        alert("Correo no valido");
                        email.focus();
                    } else {
                        alert("Guardado Correctamente");
                        var url = 'http://pokemonweb_infst8.test/';
                        $(location).attr('href', url);
                        //$.post("ajax/test.html", function (data) {
                        var frm_user = $("#frm_user").serialize();
                        //});
                    }
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

<script>
   // $(document).ready(function () {

    //     $("#form-login").on("submit",function (evt) { 
    //             evt.preventDefault();
    //             var Nombre = $("#Nombre");
    //             var email = $("#email");
    //             var Contraseña = $("#Contraseña");
    //             var RepetirContra = $("#RepetirContra");

    //             if (Nombre.val() == "") {
    //                 //$("#Nombre_help_block").show();
    //                 alert("Error en nombre"); 
    //                 Nombre.focus();
    //             } else if (Contraseña.val() == "") {
    //                 alert("Error en pass");
    //                 Contraseña.focus();
    //             } else if (Contraseña.val() != RepetirContra.val()) {
    //                 alert("Las contraseñas deben ser iguales");
    //                 Contraseña.focus();
    //             } else if (validarEmail(email.val()) == false) {
    //                 alert("Correo no valido");
    //                 email.focus();
    //             } else {
    //                 alert("Guardado Correctamente");
    //                 var url = 'http://pokemonweb_infst8.test/';
    //                 $(location).attr('href', url);
    //                 //$.post("ajax/test.html", function (data) {
    //                 var frm_user = $("#frm_user").serialize();
    //                 //});
    //             }
    //     });
    // });
    
    // function validarEmail(valor) {
    //         if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)) {
    //             return true;
    //         } else {
    //             return false;
    //         }
    //     }
</script>
@endsection('script')



@section('content')
<div id="contenido">
    <div id="titulo" class="m-3" >
        <div class="d-flex justify-content-center">
            <h1>Registro</h1>
        </div>
    </div>

    <form class="m-4" id="form-login">
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

        <div class="mb-2">
            <label for="Repetir Contra" class="form-label">Repetir Contraseña</label>
            <input type="password" class="form-control" id="RepetirContra">
        </div>  

        <div class="d-flex justify-content-center mb-2">
            <a href="/" class="btn btn-dark m-2 btn-lg">Cancelar</a>
            <button  type="submit" class="btn btn-success m-2 btn-lg">Guardar</button>
        </div>
    </form>
    
</div>
@endsection('content')