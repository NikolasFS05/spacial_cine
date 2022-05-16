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
    <div role="main">

    </div>

    <!-- footer -->
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>