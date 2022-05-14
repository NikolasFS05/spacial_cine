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
            session_start();
            $_SESSION["id_usuario"] = $row["id"];
            $_SESSION["correo"] = $row["correo"];

            if ($row["rol"] == 0) {
                $_SESSION['ruta'] = 'user';
                header("Location:".VIEWS_PATH."");
            }
            if ($row["rol"] == 1) {
                $_SESSION['ruta'] = 'admin';
                header("Location:".VIEWS_PATH."");
            }
        }
    } else {
        header("Location:".VIEWS_PATH."login.php?info=datosI");
    }
?>