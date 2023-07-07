@extends('layout.master')

<<<<<<< Updated upstream
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
=======
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

>>>>>>> Stashed changes
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                    </div>

                                    <form>
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control"
                                                placeholder="Phone number or email address" />
                                            <label class="form-label" for="form2Example11">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" />
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="button">Log
                                                in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-outline-danger">Create new</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection('content')
