<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>



    <script>
        $(document).ready(function() {
            var maxIntentos = 3;
            var intentos = 0;
            $('#btn_login').click(function(event) {
                event.preventDefault();


                var email = $("#email").val();
                var password = $("#passwordInput").val();

                if (email == "") {
                    alert("Ingrese su usuario");
                    email.focus();
                } else if (password == "") {
                    alert("Ingrese su password");
                    password.focus();
                } else {
                    $.getJSON('http://test.test/api/Usuarios', function(json) {
                        for (var i = 0; i < json.length; i++) {
                            if (email.toLowerCase() == json[i].Correo.toLowerCase()) {
                                if (password == json[i].Contrasena) {
                                    window.location.href = "http://test.test/inicio";
                                } else {
                                    intentos++;
                                    if (intentos >= maxIntentos) {
                                        // Se han superado los intentos máximos, redirigir a otra página
                                        window.location.href = "http://google.com/";
                                    } else {
                                        alert("Contraseña incorrecta. Intento " + intentos +
                                            " de " + maxIntentos);
                                    }
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>


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
            width: 100px;
            height: 50px;
        }
    </style>


</head>

<body>

    <!-- Forma de poner una imagen de fondo en web =) -->
    <section class="h-100 gradient-form">

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

</body>

</html>
