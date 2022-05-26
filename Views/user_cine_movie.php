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
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "user_index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link active" href="<?php echo VIEWS_PATH . "user_cine_movie.php"; ?>"><i class='bx bx-movie'></i> Cartelera</a>
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
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container peliculas" role="main">
        <h3 class="sub">Cartelera</h3>

        <div class="row">
            <?php
            $result = ObtenerPeliculasCartelera();
            if ($result != null) {

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="../asset/peliculas/<?php echo $row['img'] ?>" class="card-img-top" alt="Imagen de pelicula">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <p>
                                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Sinopsis</a>
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body">
                                                <?php echo $row['sinopsis'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <li class="list-group-item">Precio entrada: $<?php echo $row['precio'] ?></li>
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