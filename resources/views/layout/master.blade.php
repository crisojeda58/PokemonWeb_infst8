<!DOCTYPE html>
<html>


<head>
    <title>ProyectoWeb</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>



    @section('script')
    @show
</head>


<body>
    <div class="container-fluid bg-grey">
        <div id="fondo1" class="position-relative" id="Home" >
            <img id="foto" class="position-absolute top-50 start-50 translate-middle rounded-circle" src="./images/fondo.jpg" alt="">
        </div>
        <nav class="navbar navbar-expand-lg bg-dark sticky-top">
            <div >
                <!-- Compañia -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mb-0 h1" href="/" style="color: white; font-size: large;">Inicio</a>
                    </li>
                </ul>

            </div>
        </nav>


        <!--principal-->
        <div id="Principal">
            <main>
                @yield('content')
            </main>
        
            <div>
                <footer class="footer py-3 my-4 fixed-bottom">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Caracteristicas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Sobre</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2023 PokemonCompany, Inc</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
