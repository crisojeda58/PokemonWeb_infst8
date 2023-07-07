@extends('layout.master')

@section('style')
<style>
    #fondo {
            background-image: url('{{ asset('images/FondoRecompensas.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;
    }
    .dropdown{
        position: absolute;
        top: 9vh;
        left: 172vh;
    }
</style>
@endsection('style')

@section('script')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Recompensa Diaria</title>
    <script>
        // Lista de las recompensas
        var listaRecompensas = [20, 30, 50, 100];

        // Función para obtener una recompensa aleatoria
        function recompensaAleatoria() {
            var indice = Math.floor(Math.random() * listaRecompensas.length);
            return listaRecompensas[indice];
        }

        // Función para obtener la recompensa diaria
        $(document).ready(function() {
            $('#obtener-recompensa').on('click', function() {
                console.log('click');
                var fechaUltimoLogin = localStorage.getItem('fechaUltimoLogin');
                var currentDate = new Date().toDateString();

                if (fechaUltimoLogin === currentDate) {
                    alert('Ya has reclamado la recompensa de hoy.');
                } else {
                    localStorage.setItem('fechaUltimoLogin', currentDate);
                    var recompensaActual = parseInt(localStorage.getItem('recompensaActual') || 0);
                    var recompensaMaxima = 5;

                    if (recompensaActual < recompensaMaxima) {
                        recompensaActual++;
                        localStorage.setItem('recompensaActual', recompensaActual);
                        $('#recompensa').text(recompensaActual);
                        var recompensaObtenida = recompensaAleatoria();
                        alert('¡Has obtenido ' + recompensaObtenida + 'monedas.');
                    } else {
                        alert('Ya has reclamado la recompensa de hoy.');
                    }
                }
            });
        });
    </script>
@endsection

@section('content')
<<<<<<< Updated upstream
    <form id="form-recomensa">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Sistema de recompensas diarias</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Recompensa actual: <span id="recompensa"></span></p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button id="obtener-recompensa" type="button" class="btn btn-primary btn-lg px-4 gap-3">Reclamar
                        recompensa</button>
                </div>
            </div>
        </div>
    </form>
=======

<div class="dropdown" id="OpcionesUsuario">
    <a class="btn btn-dark dropdown-toggle btn-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Cristian
    </a>

    <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/perfil">Mi Perfil</a></li>
    <li><a class="dropdown-item" href="/">Cerrar Sesion</a></li>
    </ul>
</div>
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
>>>>>>> Stashed changes
@endsection
