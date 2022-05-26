<?php
    define('CONTROLLER_PATH','../Controller/');
    define('VIEWS_PATH','../Views/');
    define('MODELS_PATH','../Models/');
    define('LIBRARIES_PATH','../Libraries/');

    require_once(LIBRARIES_PATH."connection.php");

    $db = connection::getConnection();
    $query = "SELECT * FROM usuarios WHERE correo = '".$_POST["correo"]."' AND contrasenia = '".$_POST["contrasenia"]."'";
    $result = $db -> query($query);

    if ($result -> num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // session_start();
            // $_SESSION["nombre"] = $row["nombres"];
            // $_SESSION["correo"] = $row["correo"];

            if ($row["rol"] == 0) {
                $_SESSION['ruta'] = 'user';
                header("Location:".VIEWS_PATH."user_index.php?user=welcome");
            } else if ($row["rol"] == 1) {
                $_SESSION['ruta'] = 'admin';
                header("Location:".VIEWS_PATH."admin_index.php?admin=welcome");
            }
        }
    } else {
        header("Location:".VIEWS_PATH."login.php?info=datosI");
    }
