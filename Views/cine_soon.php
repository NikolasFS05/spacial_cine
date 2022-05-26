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

<!-- Estilo de la página -->
<link rel="stylesheet" href="<?php echo CSS_PATH . "index.css"; ?>">
</head>

<body>
    <header>
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
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "cine_movie.php"; ?>"><i class='bx bx-movie'></i> Cartelera</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "cine_soon.php"; ?>"> Estrenos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "cine_food.php"; ?>"><i class='bx bx-food-menu'></i> Confiteria</a>
                            </li>
                        </ul>
                        <!-- Funciones de registro e ingreso -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "login.php"; ?>"><i class="bx bx-log-in"></i> Ingreso</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "register.php"; ?>"><i class="bx bx-user"></i> Registro</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container peliculas">
        <h3 class="sub">Proximamente</h3>

        <div class="row">
            <?php
            $result = obtenerPeliculasPronto();
            if ($result != null) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../asset/peliculas/<?php echo $row["img"]; ?>" class="card-img-top" alt="Imagen de pelicula">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Estreno: <?php echo $row['fecha_estreno'] ?></li>
                                <li class="list-group-item">Genero: <?php echo $row['genero'] ?></li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link"> <i class="bx bx-cart"></i> Comprar entrada</a>
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

        <!-- footer -->
        <?php
        include(VIEWS_PATH . "footer.php");
        ?>