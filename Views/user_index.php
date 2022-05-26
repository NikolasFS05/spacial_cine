<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../config/');
}
include(VIEWS_PATH . "header.php");

require_once(CONTROLLER_PATH . "control_movie.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "index.css"; ?>">
</head>

<body>
    <!-- Intento de menu -->
    <header role="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="margin-left: 45%; font-size: 35px;">Spacial Cine</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link active" href="<?php echo VIEWS_PATH . "user_index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "user_cine_movie.php"; ?>"><i class='bx bx-movie'></i> Cartelera</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "user_cine_soon.php"; ?>"> Estrenos</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "user_cine_food.php"; ?>"><i class='bx bx-food-menu'></i> Confiteria</a>
                            </li>
                        </ul>
                        <!-- Funciones de registro e ingreso -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <!-- <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "login.php"; ?>"><i class="bx bx-log-in"></i> Ingreso</a> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWS_PATH; ?>login.php?info=salida"><i class="bx bx-log-out"></i> Cerrar sesión</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container peliculas" role="main">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../asset/peliculas/doctorStrangeBanner.jpg" class="d-block w-100 carru" alt="Carrusel de imagenes de peliculas en cartelera">
                    <!-- <div class="carousel-caption d-none d-md-block texto"> -->
                    <!-- <h5>Kandisha Mujer Demonio</h5> -->
                    <!-- <p>Some representative placeholder content for the first slide.</p> -->
                    <!-- </div> -->
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../asset/peliculas/llamasVenganzaBanner.jpg" class="d-block w-100 carru" alt="Carrusel de imagenes de peliculas en cartelera">
                    <!-- <div class="carousel-caption d-none d-md-block texto"> -->
                    <!-- <h5>Llamas de Venganza</h5> -->
                    <!-- <p>Some representative placeholder content for the second slide.</p> -->
                    <!-- </div> -->
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <h2 class="sub">En cartelera</h2>
        <div class="row">
            <?php
            $result = obtenerPeliculasDisponibles();
            if ($result != null) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4">
                        <form id="formulario" name="formulario" method="POST">
                            <div class="card">
                                <img src="../asset/peliculas/<?php echo $row['img'] ?>" class="card-img-top" alt="Imagen de pelicula">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <input name="titulo" type="hidden" id="titulo" value="<?php echo $row['titulo']; ?>">
                                    <input name="precio" type="hidden" id="precio" value="<?php echo $row['precio']; ?>">
                                    <input name="cantidad" type="hidden" id="cantidad" value="1">

                                    <li class="list-group-item">Estreno: <?php echo $row['fecha_estreno'] ?></li>
                                    <li class="list-group-item">Genero: <?php echo $row['genero'] ?></li>
                                </ul>
                                <div class="card-body">
                                    <button class="btn btn-success" name="btnAccion" value="agregar" type="submit"><i class="bx bx-cart"></i>Comprar entrada</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <hr>
        <br>
        <h2 class="sub">Proximamente</h2>
        <div class="row">
            <?php
            $result = obtenerPeliculasEspera();
            if ($result != null) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../asset/peliculas/<?php echo $row['img']; ?>" class="card-img-top" alt="Imagen de pelicula">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Estreno: <?php echo $row['fecha_estreno'] ?></li>
                                <li class="list-group-item">Genero: <?php echo $row['genero'] ?></li>
                            </ul>
                            <div class="card-body">
                                <!-- <a href="#" class="card-link">Comprar entrada</a> -->
                            </div>
                        </div>
                        <br>
                    </div>

            <?php
                }
            }
            ?>
        </div>
        <br>
    </div>
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>