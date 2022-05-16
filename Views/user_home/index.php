<?php
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../../Views/');
define('MODELS_PATH', '../..Models/');
define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('ASSET_PATH', '../../asset/');

include(VIEWS_PATH . "header.php");
?>

<link rel="stylesheet" href="<?php echo CSS_PATH . "sidemenu.css"; ?>">
</head>

<body>
    <div role="main">
        <div class="sidebar">
            <!-- logo y titulo -->
            <div class="logo_content">
                <div class="logo">
                    <img src="" alt="">
                    <div class="logo_name">Spacial Cine</div>
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <!-- items -->
            <ul class="nav_list">
                <li>
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Buscar">
                    <!-- <span class="tooltip">Cartelera</span> -->
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links_name">Perfil</span>
                    </a>
                    <!-- <span class="tooltip">Cartelera</span> -->
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-movie'></i>
                        <span class="links_name">Cartelera</span>
                    </a>
                    <!-- <span class="tooltip">Cartelera</span> -->
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-folder-minus'></i>
                        <span class="links_name">Estrenos</span>
                    </a>
                    <!-- <span class="tooltip">Cartelera</span> -->
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-bowl-hot'></i>
                        <span class="links_name">Comidas</span>
                    </a>
                    <!-- <span class="tooltip">Cartelera</span> -->
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-cart'></i>
                        <span class="links_name">Carrito</span>
                    </a>
                    <!-- <span class="tooltip">Cartelera</span> -->
                </li>
            </ul>

            <!-- perfil -->
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <i class="bx bx-user"></i>
                        <div class="name_job">
                            <div class="name">...</div>
                            <div class="job">...</div>
                        </div>
                    </div>
                    <i class="bx bx-log-out" id="log_out"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text"></div>
    </div>

    <!-- footer -->
    <?php
    include(VIEWS_PATH . "footer.php");
    ?>