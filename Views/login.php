<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "menu.css"; ?>">
<link rel="stylesheet" href="<?php echo CSS_PATH . "login.css"; ?>">
</head>

<body>
    <!-- Menú de navegación -->
    <header class="header">
        <div class="menu">
            <nav role="navigation" class="nav">
                <a href="#" class="logo nav-link"><img src="<?php echo ASSET_PATH . "logo.png"; ?>" alt="Logo de la marca"></a>
                <h3>Spacial Cine</h3>
                <button class="nav-toggle" aria-label="Abrir menú">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-menu">
                    <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Cartelera</a></li>
                    <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Estrenos</a></li>
                    <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Comidas</a></li>
                    <li class="nav-menu-item"><a href="#" class="nav-menu-link nav-link">Ingresar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Main -->
    <div class="container">
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
