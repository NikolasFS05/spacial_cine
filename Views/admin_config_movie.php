<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../..Models/');
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
<link rel="stylesheet" href="<?php echo CSS_PATH . "indexH.css"; ?>">
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
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "admin_index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo VIEWS_PATH . "admin_config_movie.php"; ?>"><i class='bx bx-movie'></i> Gestión peliculas</a>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="<?php echo VIEWS_PATH . "admin_config_food.php"; ?>"> Gestión confiteria</a> -->
                            </li>
                        </ul>
                        <!-- Funciones de registro e ingreso -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="<?php echo VIEWS_PATH . "config_perfil.php"; ?>"><i class="bx bx-cog"></i> Configuración</a> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWS_PATH; ?>login.php?info=salida"><i class="bx bx-log-out"></i> Cerrar sesión</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container peliculas">
        <div class="col-md-9">
            <div class="jumbotron">
                <h2>Peliculas</h2>
                <p>
                    En esta sección se pueden agregar nuevas peliculas, modificarlas o eliminarlas.
                </p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Nueva pelicula
                </button>
                <br>
                <br>
                <table class="table table-stripped table-bordered" style="border: 2px solid black;">
                    <thead>
                        <tr>
                            <th scope="col">Imagen</th>
                            <th scope="col">Titulo</th>

                            <th scope="col">Fecha de estreno</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cartelera</th>
                            <th scope="col">Vista previa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result =  obtenerTodasPeliculas();
                        if ($result != null) {
                            while ($pelicula = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $pelicula["img"]; ?></td>
                                    <td><?php echo $pelicula["titulo"]; ?></td>

                                    <td><?php echo $pelicula["fecha_estreno"]; ?></td>
                                    <td><?php echo $pelicula["genero"]; ?></td>
                                    <td><?php echo $pelicula["precio"]; ?></td>
                                    <td><?php echo $pelicula["disponible"]; ?></td>
                                    <td><?php echo $pelicula["vista_previa"]; ?></td>
                                    <td>
                                        <a href="?id=<?php echo $pelicula["id"]; ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="?id=<?php echo $pelicula["id"]; ?>&elimina=1">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                if (isset($_GET["id"]) && !isset($_GET["elimina"])) {
                    $result_one_movie = obtenerUnaPelicula($_GET["id"]);

                    while ($row = mysqli_fetch_assoc($result_one_movie)) {
                ?>
                        <form style="background-color: 1d1f31;" method="POST" action="<?php echo CONTROLLER_PATH; ?>control_movie.php">
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="text" value="<?php echo $row["img"]; ?>" class="form-control" id="img" name="img" aria-describedby="textHelp">
                                <div id="" class="form-text">Ingresa el nombre de la imagen</div>
                            </div>
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input type="text" value="<?php echo $row["titulo"] ?>" class="form-control" id="titulo" name="titulo" aria-describedby="textHelp">
                                <div id="" class="form-text">Ingresa el titulo de la pelicula</div>
                            </div>
                            <div class="mb-3">
                                <label for="sinopsis" class="form-label">Sinopsis</label>
                                <input type="text" value="<?php echo $row["sinopsis"] ?>" class="form-control" id="sinopsis" name="sinopsis" aria-describedby="textHelp">
                                <div id="" class="form-text">Ingresa una sinopsis</div>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_estreno" class="form-label">Fecha de estreno</label>
                                <input type="date" value="<?php echo $row["fecha_estreno"] ?>" class="form-control" id="fecha_estreno" name="fecha_estreno" aria-describedby="dateHelp">
                                <div id="" class="form-text">Ingresa la fechad e estreno</div>
                            </div>
                            <div class="mb-3">
                                <label for="genero" class="form-label">Genero</label>
                                <input type="text" value="<?php echo $row["genero"] ?>" class="form-control" id="genero" name="genero" aria-describedby="genderHelp">
                                <div id="" class="form-text">Ingresa un o mas generos</div>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" value="<?php echo $row["precio"] ?>" class="form-control" id="precio" name="precio" aria-describedby="priceHelp">
                                <div id="" class="form-text">Ingresa el precio de la pelicula</div>
                            </div>
                            <div class="mb-3">
                                <label for="disponible" class="form-label">Cartelera</label>
                                <input type="number" value="<?php $row["disponible"] ?>" class="form-control" id="disponible" name="disponible" aria-describedby="avaibleHelp">
                                <div id="" class="form-text">Ingresa 1 si estará en cartelera, ingresá 0 si estara en estrenos(proximamente)</div>
                            </div>
                            <div class="mb-3">
                                <label for="vista_previa" class="form-label">Vista previa</label>
                                <input type="number" value="<?php $row["vista_previa"] ?>" class="form-control" id="vista_previa" name="vista_previa" aria-describedby="vista_previa">
                                <div id="" class="form-text">Ingresa 1 si saldra al incio, ingresa 0 para lo contrario</div>
                            </div>
                            <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                            <input type="hidden" name="actualiza_pelicula">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <br>
                            <br>
                        </form>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-describedby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="<php echo CONTROLLER_PATH; ?>control_movie.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar pelicula</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="text" class="form-control" id="img" name="img" aria-describedby="textHelp">
                            <div id="" class="form-text">Ingresa el nombre de la imagen</div>
                        </div>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="textHelp">
                            <div id="" class="form-text">Ingresa el titulo de la pelicula</div>
                        </div>
                        <div class="mb-3">
                            <label for="sinopsis" class="form-label">Sinopsis</label>
                            <input type="text" class="form-control" id="sinopsis" name="sinopsis" aria-describedby="textHelp">
                            <div id="" class="form-text">Ingresa una sinopsis</div>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_estreno" class="form-label">Fecha de estreno</label>
                            <input type="date" class="form-control" id="fecha_estreno" name="fecha_estreno" aria-describedby="dateHelp">
                            <div id="" class="form-text">Ingresa la fechad e estreno</div>
                        </div>
                        <div class="mb-3">
                            <label for="genero" class="form-label">Genero</label>
                            <input type="text" class="form-control" id="genero" name="genero" aria-describedby="genderHelp">
                            <div id="" class="form-text">Ingresa un o mas generos</div>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" aria-describedby="priceHelp">
                            <div id="" class="form-text">Ingresa el precio de la pelicula</div>
                        </div>
                        <div class="mb-3">
                            <label for="disponible" class="form-label">Cartelera</label>
                            <input type="number" class="form-control" id="disponible" name="disponible" aria-describedby="avaibleHelp">
                            <div id="" class="form-text">Ingresa 1 si estará en cartelera, ingresá 0 si estara en estrenos(proximamente)</div>
                        </div>
                        <div class="mb-3">
                            <label for="vista_previa" class="form-label">Vista previa</label>
                            <input type="number" class="form-control" id="vista_previa" name="vista_previa" aria-describedby="vista_previa">
                            <div id="" class="form-text">Ingresa 1 si saldra al incio, ingresa 0 para lo contrario</div>
                        </div>
                        <input type="hidden" name="nueva_pelicula">
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>