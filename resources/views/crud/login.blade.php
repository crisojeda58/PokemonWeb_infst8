<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="resources\css\app.css">
    <script src="login.js"></script>


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





    <script>
        $(document).ready(function() {
            var intentos = 0;

            $("#btn_login").click(function() {
                var email = $("#email");

                if (validarEmail(email.val()) == false) {
                    alert("Error en el email de usuario");
                    email.focus();
                    intentos++;
                    if (intentos >= 3) {
                        alert("Se ha excedido el número máximo de intentos");
                        $("#btn_login").prop("disabled", true);
                    }
                } else {
                    $("#mensaje").show();
                }
            });

            function validarEmail(email) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
        });
    </script>

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

    <style>
        #ash {
            position: relative;
            right: 60px;
        }
    </style>


</head>

<body>

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
                                        <img src="{{ asset('images/pokemonlogo.png') }}" style="width: 200px;"
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
                                    <div class="text-center" id="ash">
                                        <img src="{{ asset('images/ashketchu.png') }}" alt="Ash">
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
