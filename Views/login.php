<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "login.css"; ?>">
</head>

<body>
    <div role="main">
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
        <!-- formulario de registro  -->
        <form role="form" action="<?php echo CONTROLLER_PATH; ?>validate_login.php" method="POST" class="form-login">
            <h1>Ingreso de usuarios</h1>
            <div class="row">
                <!-- Correo -->
                <label for="nombres">Correo electronico</label>
                <div class="col-sm-12">
                    <input class="form-control" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" aria-label="Ingresa tu correo.">
                </div>
                <!-- Contraseña -->
                <label for="nombres">Contraseña</label>
                <div class="col-sm-12">
                    <input class="form-control" type="password" name="contrasenia" id="contrasenia" placeholder="Ingrese su Contraseña" aria-label="Ingresa una contraseña que tenga una letra mayuscula, minimo 8 caracteres y un número.">
                </div>

                <!-- Datos residenciales -->
                <div>
                    <hr>
                </div>
            </div>
            <button type="submit" class="button" value="Ingresar">Ingresar</button>
            <p>¿Olvidaste tu contraseña?<a href="#"> Recupérala aqui</a></p>
            <p>¿Aun no te has registrado?<a href="<?php echo VIEWS_PATH . "register.php" ?>"> Regístrate aquí</a></p>
    </div>
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>
    <!--     
        <div class="container">
           
    
            <div class="form-signin">
                <form role="form" >
                    <img src="" alt="Logo de la empresa">
                    <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>
    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo">
                        <label for="floatingInput">Correo electronico:</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="contrasenia">
                        <label for="floatingPassword">Contraseña:</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
                    <p>¿Olvidaste tu contraseña?<a href="#">Recupérala aqui</a></p>
                    <p>¿Aun no te has registrado?<a href="#">Regístrate aqui</a></p>
                </form>
            </div>
        </div> -->