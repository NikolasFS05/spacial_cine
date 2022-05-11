<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
?>

<div class="container">
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

    <div class="form-signin">
        <form>
            <img src="" alt="Logo de la empresa">
            <h1 class="h3 mb-3 fw-normal">Inicio de sesión</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo electronico:</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña:</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
            <p>¿Olvidaste tu contraseña?<a href="#">Recupérala aqui</a></p>
            <p>¿Aun no te has registrado?<a href="#">Regístrate aqui</a></p>
        </form>
    </div>
</div>

<?php
include(VIEWS_PATH . "footer.php");
?>