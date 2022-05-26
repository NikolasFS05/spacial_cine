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
include(VIEWS_PATH . "cart.php");
include(VIEWS_PATH . "header.php");

require_once(CONTROLLER_PATH . "control_movie.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "index.css"; ?>">
</head>

<body>
    <!-- Intento de menu -->
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
                                <a role="menuitem" class="nav-link active" href="<?php echo VIEWS_PATH . "index.php"; ?>"><i class="bx bx-home"></i> Inicio</a>
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
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "login.php"; ?>"><i class="bx bx-log-in"></i> Ingreso</a>
                            </li>
                            <li class="nav-item">
                                <a role="menuitem" class="nav-link" href="<?php echo VIEWS_PATH . "register.php"; ?>"><i class="bx bx-user"></i> Registro</a>
                            </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <div class="container peliculas" role="main">
        <h3>Lista del carrito</h3>
        <?php if (!empty($_SESSION['cart'])) { ?>

            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                        <th width="40%">Decripción</th>
                        <th width="15%" class="text-center">cantidad</th>
                        <th width="20%" class="text-center">Precio</th>
                        <th width="20%" class="text-center">Total</th>
                        <th width="5%">--</th>
                    </tr>
                    <?php foreach ($_SESSION['cart'] as $indice => $pelicula) {
                    ?>
                        <tr>
                            <td width="40%"><?php echo $pelicula['titulo'] ?></td>
                            <td width="15%"><?php echo $pelicula['cantidad'] ?></td>
                            <td width="20%"><?php echo $pelicula['precio'] ?></td>
                            <td width="20%"><?php echo $pelicula['titulo'] ?></td>
                            <td width="5%"><button class="btn btn-danger" type="button">Eliminar</button></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3" align="right">
                            <h3>Total</h3>
                        </td>
                        <td align="right">
                            <h3>$<?php echo number_format(300, 2); ?></h3>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        <?php
        } else { ?>
            <div class="alert alert-success">
                No hay Productos en el carrito
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>