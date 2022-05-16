<?php 
if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}


    require_once(LIBRARIES_PATH."connection.php");

    // se añaden usuarios
    function addUser($nombres, $apellidos, $correo, $contrasenia, $documento, $fx_nacimiento, $direccion, $celular) {
        $db = connection::getConnection();
        $query = "INSERT INTO usuarios (nombres, apellidos, correo, contrasenia, documento, fx_nacimiento, direccion, celular, rol) 
        VALUES 
        ('$nombres', '$apellidos', '$correo', '$contrasenia', '$documento', '$fx_nacimiento', '$direccion', '$celular', '0')";
        $db -> query($query);
    }
    if (isset($_POST['New_user'])) {
        addUser($_POST["nombres"], $_POST["apellidos"], $_POST["correo"], $_POST["contrasenia"], $_POST["documento"], $_POST["fx_nacimiento"], $_POST["direccion"], $_POST["celular"]);
        header("Location:".VIEWS_PATH."login.php");
    }

 ?>