<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../Libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "connection.php");

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

    function getUSer() {
        $db = connection::getConnection();

        $query = "SELECT * FROM usuarios WHERE rol = 0";
        $result = $db -> query($query);
        return $result;
    }

    function getAdminUSer() {
        $db = connection::getConnection();

        $query = "SELECT * FROM usuarios WHERE rol = 1";
        $result = $db -> query($query);
        return $result;
    }

    function getOneUser($id)
    {
        $db = Connection::getConnection();

        $queryUser = "SELECT * FROM usuarios WHERE id=".$id;
        $result = $db -> query($queryUser);
        if ($result -> num_rows > 0) {
            return $result;
        }
        return null;
    }

    function updateOneUser($id, $nombres, $apellidos, $correo, $contrasenia, $documento, $fx_nacimiento, $direccion, $celular) {
        $db = connection::getConnection();

        $queryUser = "UPDATE usuarios SET = nombres='$nombres', apellidos='$apellidos', correo='$correo', contrasenia='$contrasenia', documento='$documento', fx_nacimiento='$fx_nacimiento', direccion ='$direccion', celular='$celular' WHERE id=".$id;
        $db -> query($queryUser);
    }
    if (isset($_POST['New_user'])) {
        updateOneUser($_POST["id"], $_POST["nombres"], $_POST["apellidos"], $_POST["correo"], $_POST["contrasenia"], $_POST["documento"], $_POST["fx_nacimiento"], $_POST["direccion"], $_POST["celular"]);
        header("Location:".VIEWS_PATH."/admin_home/config_perfil.php");
    }

    function deleteOneUser($id) {
        $db = connection::getConnection();

        $queryUser = "DELETE FROM cantantes WHERE id=" .$id;
        $db -> query($queryUser);
    }
    if (isset($GET["elimina"]) && isset($_GET["id"])) {
        deleteOneUser($_GET["id"]);
        header("Location:".VIEWS_PATH."/admin_home/config_perfil.php");
    }