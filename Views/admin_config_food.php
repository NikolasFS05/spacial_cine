<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../..Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('ASSET_PATH', '../asset/');

include(VIEWS_PATH . "header.php");
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
                                <a class="nav-link" href="<?php echo VIEWS_PATH . "admin_config_food.php"; ?>"> Gestión confiteria</a>
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
        <h1>! Bienvenido administrador ¡</h1>
        <p class="sub">¿Estas listo para gestionar esta página? ¿Si?, entonces recuerda esto <i>El liderazgo es trabajar con objetivos y visión; gestión es trabajar con objetivos.-Russel Honore.</i></p>
        <br>
    </div>

    <!-- footer -->
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>