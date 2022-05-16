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
<link rel="stylesheet" href="<?php echo CSS_PATH . "register.css"; ?>">
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
                <span class="tittle">Registrarse</span>

                <form role="form" action="<?php echo CONTROLLER_PATH; ?>control_user.php" method="POST">
                    <div class="row">
                        <!-- nombres -->
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="nombres" placeholder="Ingrese sus nombres" required>
                                <i class="uil uil-user"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="text" name="apellidos" placeholder="Ingrese sus apellidos" required>
                                <i class="uil uil-user"></i>
                            </div>
                        </div>

                        <!-- correo -->
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="email" name="correo" placeholder="Ingrese su correo" required>
                                <i class="uil uil-envelope"></i>
                            </div>
                        </div>

                        <!-- contraseñas -->
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" name="contrasenia" class="password" placeholder="Ingrese la contraseña" required>
                                <i class="uil uil-lock icon"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-field">
                                <input type="password" name="contraseniaC" class="password" placeholder="Confirma la contraseña" required>
                                <i class="uil uil-lock icon"></i>
                                <i class="uil uil-eye-slash showHidePw"></i>
                            </div>
                        </div>

                        <!-- Documento y fecha -->
                        <div class="col-sm-7">
                            <div class="input-field">
                                <input type="number" name="documento" placeholder="Ingrese su documento identidad" required>
                                <i class="uil uil-file-blank"></i>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-field">
                                <input type="date" name="fx_nacimiento" placeholder="Ingrese su fecha de nacimiento" required>
                                <i class="uil uil-calendar-alt"></i>
                            </div>
                        </div>

                        <!-- dirección y celular -->
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="text" name="direccion" placeholder="Ingrese su dirección" required>
                                <i class="uil uil-location-point"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-field">
                                <input type="number" name="celular" placeholder="Ingrese su número celular" required>
                                <i class="uil uil-phone"></i>
                            </div>
                        </div>

                        <!-- checkbox -->
                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Acepto que Spacial Cine utilice y maneje mis datos segun la ley de protección de datos.</label>
                            </div>
                        </div>

                        <!-- Registrar -->
                        <div class="input-field button">
                            <input type="submit" value="Registrar" required>
                        </div>
                    </div>
                    <input type="hidden" name="New_user">
                </form>

                <div class="login-signup">
                    <span class="text">¿Ya tienes cuenta?</span>
                    <a href="<?php echo VIEWS_PATH . "login.php" ?>" class="text signup-text"> Ingresa ahora</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include(VIEWS_PATH . "footer.php");
    ?>