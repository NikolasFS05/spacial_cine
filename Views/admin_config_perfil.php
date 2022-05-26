<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWSU_PATH', '../admin_home/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

if (!defined('CONFIG_PATH')) {
    define('CONFIG_PATH', '../config/');
}

include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "control_user.php");
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
                                <a class="nav-link active" href="<?php echo VIEWSU_PATH . "index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWSU_PATH . "config_movie.php"; ?>"><i class='bx bx-movie'></i> Gestión peliculas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWSU_PATH . "config_food.php"; ?>"> Gestión confiteria</a>
                            </li>
                        </ul>
                        <!-- Funciones de registro e ingreso -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo VIEWSU_PATH . "config_perfil.php"; ?>"><i class="bx bx-cog"></i> Configuración</a>
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
        <!-- <div class="col-md-9"> -->
        <div class="jumbotron">
            <h2>Perfil</h2>
            <p>Este es tu perfil, aqui veras todos tus datos y podras modificarlos a gusto. ¡Buena suerte!</p>
            <!-- </div> -->
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Documento de identidad</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Celular</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = getAdminUSer();
                    if ($result != null) {
                        while ($admin = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td><?php echo $admin["nombres"]; ?></td>
                                <td><?php echo $admin["apellidos"]; ?></td>
                                <td><?php echo $admin["correo"]; ?></td>
                                <td><?php echo $admin["contrasenia"]; ?></td>
                                <td><?php echo $admin["documento"]; ?></td>
                                <td><?php echo $admin["fx_nacimiento"]; ?></td>
                                <td><?php echo $admin["direccion"]; ?></td>
                                <td><?php echo $admin["celular"]; ?></td>
                                <td>

                                    <a href="?id=<?php echo $admin["id"]; ?>">
                                        <i class="bx bx-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="?id=<?php echo $admin["id"]; ?>&elimina=1">
                                        <i class="bx bx-trash" aria-hidden="true"></i>
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
                $result_one_user = getOneUser($_GET["id"]);
                while ($row = mysqli_fetch_assoc($result_one_user)) {
            ?>
                    <form method="POST" action="<?php echo CONTROLLER_PATH; ?>control_user.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombres</label>
                            <input type="text" value="<?php echo $row["nombres"] ?>" class="form-control" id="nombres" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu nombre.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Apellidos</label>
                            <input type="text" value="<?php echo $row["apellidos"] ?>" class="form-control" id="apellidos" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tus apellidos.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Correo</label>
                            <input type="text" value="<?php echo $row["correo"] ?>" class="form-control" id="correo" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu correo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Contraseña</label>
                            <input type="text" value="<?php echo $row["contrasenia"] ?>" class="form-control" id="contrasenia" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu contraseña.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Documento</label>
                            <input type="text" value="<?php echo $row["documento"] ?>" class="form-control" id="documento" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu documento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Fecha de nacimiento</label>
                            <input type="text" value="<?php echo $row["fx_nacimiento"] ?>" class="form-control" id="fx_nacimiento" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu fecha de nacimiento.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Dirección</label>
                            <input type="text" value="<?php echo $row["direccion"] ?>" class="form-control" id="direccion" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu diracción.</div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Celular</label>
                            <input type="text" value="<?php echo $row["celular"] ?>" class="form-control" id="celular" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingresa tu celular.</div>
                        </div>
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <input type="hidden" name="actualiza_usuario">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- footer -->
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>