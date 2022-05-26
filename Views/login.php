<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "index.css" ?>">
<link rel="stylesheet" href="<?php echo CSS_PATH . "login.css" ?>">

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
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "cine_movie.php"; ?>"><i class='bx bx-movie'></i> Cartelera</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "cine_soon.php"; ?>"> Estrenos</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "cine_food.php"; ?>"><i class='bx bx-food-menu'></i> Confiteria</a>
                            </li>
                        </ul>
                        <!-- Funciones de registro e ingreso -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link active" href="<?php echo VIEWS_PATH . "login.php"; ?>"><i class="bx bx-log-in"></i> Ingreso</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "register.php"; ?>"><i class="bx bx-user"></i> Registro</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Formulario de ingreso -->
    <div class="container login" role="main">
        <div class="forms">
            <div class="form login">
                <!-- Alertas en errores o cierre de sesión -->
                <?php
                if (isset($_GET["info"])) {
                    if ($_GET["info"] == "datosI") {
                ?>
                        <div class="alert alert-danger d-flex alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <strong>¡Datos Incorrectos!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    }
                    if ($_GET["info"] == "salida") {
                    ?>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <strong>¡Cerró Sesión!</strong> Adiós
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php
                    }
                }
                ?>
                <span class="tittle">Ingreso al sistema</span>
                <!-- Formulario de ingreso -->
                <form role="form" action="<?php echo CONTROLLER_PATH; ?>validate_login.php" method="POST">
                    <div class="input-field">
                        <input type="email" name="correo" placeholder="Ingresa tu correo" required>
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="contrasenia" class="password" placeholder="Ingresa tu contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Recuerdame</label>
                        </div>
                        <a href="#" class="text">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Ingresar" required>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿No tienes cuenta?</span>
                    <a href="<?php echo VIEWS_PATH . "register.php"; ?>" class="text signup-text"> ¡Registrate ahora!</a>
                </div>
            </div>
        </div>
    </div>


    <?php
    include(VIEWS_PATH . "footer.php");
    ?>