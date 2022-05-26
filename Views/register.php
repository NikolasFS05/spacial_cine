<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "index.css"; ?>">
<link rel="stylesheet" href="<?php echo CSS_PATH . "register.css"; ?>">
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
                                <a role="main" class="nav-link" href="<?php echo VIEWS_PATH . "index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a role="main" class="nav-link" href="<?php echo VIEWS_PATH . "cine_movie.php"; ?>"><i class='bx bx-movie'></i> Cartelera</a>
                            </li>
                            <li class="nav-item">
                                <a role="main" class="nav-link" href="<?php echo VIEWS_PATH . "cine_soon.php"; ?>"> Estrenos</a>
                            </li>
                            <li class="nav-item">
                                <a role="main" class="nav-link" href="<?php echo VIEWS_PATH . "cine_food.php"; ?>"><i class='bx bx-food-menu'></i> Confiteria</a>
                            </li>
                        </ul>
                        <!-- Funciones de registro e ingreso -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a role="main" class="nav-link" href="<?php echo VIEWS_PATH . "login.php"; ?>"><i class="bx bx-log-in"></i> Ingreso</a>
                            </li>
                            <li class="nav-item">
                                <a role="main" class="nav-link active" href="<?php echo VIEWS_PATH . "register.php"; ?>"><i class="bx bx-user"></i> Registro</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Formulario de registro -->
    <div class="container login" role="main">
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


        <?php
        include(VIEWS_PATH . "footer.php");
        ?>