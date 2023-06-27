@extends('layout.master')

@section('script')
    <title>Recompensa Diaria</title>

    <script>
        // Lista de las recompensas
        var listaRecompensas = [20, 30, 50, 100];

        // Función para obtener una recompensa aleatoria
        function recompensaAleatoria() {
            var indice = Math.floor(Math.random() * listaRecompensas.length);
            return listaRecompensas[indice];
        }

        // Función para cargar la recompensa total
        function almacenarRecompensaTotal(recompensaObtenida) {
            var recompensaTotal = parseInt(localStorage.getItem('recompensaTotal')) || 0;
            recompensaTotal += recompensaObtenida;
            localStorage.setItem('recompensaTotal', recompensaTotal);
        }

        // Función para mostrar la recompensa total al cargar el sitio
        function mostrarRecompensaTotal() {
            var recompensaTotal = parseInt(localStorage.getItem('recompensaTotal')) || 0;
            $('#recompensa-total').text(recompensaTotal);
        }

        // Función para obtener la recompensa diaria
        $(document).ready(function() {
            $('#obtener-recompensa').on('click', function() {
                //var fechaUltimoLogin = localStorage.getItem('fechaUltimoLogin');
                //var fechaActual = new Date().toDateString();

                //if (fechaUltimoLogin === fechaActual) {
                //    alert('Ya has reclamado la recompensa de hoy.');
                //} else {
                //    localStorage.setItem('fechaUltimoLogin', fechaActual);
                var recompensaObtenida = recompensaAleatoria();
                var recompensaActual = parseInt($('#recompensa-diaria').text() || 0);
                var recompensaTotal = parseInt($('#recompensa-total').text() || 0);

                recompensaActual += recompensaObtenida;
                recompensaTotal += recompensaObtenida;

                $('#recompensa-actual').text(recompensaObtenida);

                almacenarRecompensaTotal(recompensaObtenida);
                mostrarRecompensaTotal();

                alert('¡Has obtenido ' + recompensaObtenida + ' monedas!');
                //}
            });
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

                                    <button id="obtener-recompensa" class="btn btn-primary btn-lg btn-block"
                                        type="button">Reclamar
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
