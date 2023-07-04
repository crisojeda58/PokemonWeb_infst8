@extends('layout.master')

@section('script')
    <title>Recompensa Diaria</title>

    <script>
        $(document).ready(function() {
            $('#recompensa-actual').text(0);


            $('#obtener-recompensa').click(function() {

                // Obtener la fecha para dar la recompensa
                var fechaUltimoLogin = localStorage.getItem('fechaUltimoLogin');
                var fechaActual = new Date().toDateString();

                if (fechaUltimoLogin === fechaActual) {
                    alert('Ya has reclamado la recompensa de hoy.');
                } else {
                    localStorage.setItem('fechaUltimoLogin', fechaActual);

                    //  Verificar al usuario y obtener su ID
                    $.ajax({
                        url: 'http://pokemonweb_infst8.test/api/verificar-usuario',
                        type: 'POST',
                        success: function(response) {
                            var id = response.id;
                            event.preventDefault();

                            // Realizar una solicitud para guardar la recompensa del usuario
                            $.ajax({
                                url: 'http://pokemonweb_infst8.test/api/guardar-recompensa/' + id,
                                type: 'POST',
                                success: function(response) {
                                    var recompensaObtenida = response.recompensaAleatoria;
                                    $('#recompensa-actual').text(recompensaObtenida);

                                    alert('¡Has obtenido ' + response.recompensaAleatoria + ' monedas!');

                                    mostrarRecompensaTotal();
                                }
                            });
                        },
                        error: function() {
                            alert('No se pudo verificar al usuario.');
                        }
                    });

                    event.preventDefault();
                }
            });

            function mostrarRecompensaTotal() {
                $.ajax({
                    url: 'http://pokemonweb_infst8.test/api/usuarios/' + id,
                    type: 'GET',
                    success: function(response) {
                        var recompensaTotal = response.Monedas;
                        $('#recompensa-total').text(recompensaTotal);
                    },
                    error: function() {
                        alert('No se pudo obtener la recompensa total.');
                    }
                });
            }
            mostrarRecompensaTotal();
        });
    </script>

    <style>
        #fondo {
            background-image: url('{{ asset('images/FondoRecompensas.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
@section('content')

    <body>
        <form id="form-recomensa">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <h3 class="mb-5">Recompensa Diaria</h3>

                                    <div class="form-outline mb-4">
                                        <p class="lead mb-4">Recompensa Actual: <span id="recompensa-actual"></span></p>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <p class="lead mb-4">Recompensa Total: <span id="recompensa-total"></span></p>
                                    </div>

                                    <button id="obtener-recompensa" class="btn btn-primary btn-lg btn-block" type="button">Reclamar
                                        Recompensa</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </body>
@endsection
