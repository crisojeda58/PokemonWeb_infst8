@extends('layout.master')

@section('script')
<script>
    $(document).ready(function() {
        var maxIntentos = 3;
        var intentos = 0;
        $('#btn_login').click(function(event) {
            event.preventDefault();


            var email = $("#email").val();
            var password = $("#passwordInput").val();

            if (email == "") {
                alert("Ingrese su email");
                email.focus();
            } else if (password == "") {
                alert("Ingrese su contraseña");
                password.focus();
            } else {
                $.getJSON('http://pokemonweb_infst8.test/api/usuarios', function(json) {
                    for (var i = 0; i < json.length; i++) {
                        if (email.toLowerCase() == json[i].Correo.toLowerCase()) {
                            if (password == json[i].Contrasena) {
                                window.location.href = "http://pokemonweb_infst8.test/inicio";
                                alert("Bienvenido de vuelta");
                            } else {
                                intentos++;
                                if (intentos >= maxIntentos) {
                                    // Se han superado los intentos máximos, redirigir a otra página
                                    alert("Ha superado el numero de intentos");
                                    window.location.href = "http://pokemonweb_infst8.test/";
                                    alert("contraseña incorrecta");
                                }
                            }
                        }
                    }
                });
            }
        });
    });
</script>
@endsection('script')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@section('style')
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-image: url('{{ asset('images/fondoweb.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }

        #ashfinal {
            position: relative;
            right: 60px;
            width: 20px;
            height: 700px;
        }
        #ash {
            position: relative;
            right: 60px;
        }
    </style>
@endsection('style')

@section('content')
    <!-- Forma de poner una imagen de fondo en web =) -->
    <section class="h-100 gradient-form" style="background-image: url('images/fondo5.jpg');">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black" style="background-color: #fcfbf8;">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('images/logofinal.png') }}" style="width: 200px;"

                                            alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">¡Bienvenido de nuevo!</h4>
                                    </div>


                                    <form>
                                        <p>Porfavor maestro pokémon, inicie sesión con su cuenta</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" class="form-control"
                                                placeholder="E-mail" />
                                            <label class="form-label" for="form2Example11"></label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="passwordInput" class="form-control"
                                                placeholder="Contraseña">

                                            <label class="form-label" for="passwordInput"></label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                id="btn_login" type="button">
                                                Acceder
                                            </button>
                                            <div id="mensaje" style="display: none;">Has accedido!</div>
                                        </div>



                                    </form>

                                </div>

                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <div class="text-center" id="ashfinal">
                                        <img src="{{ asset('images/ashfinal.png') }}" alt="Ash">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection('content')
