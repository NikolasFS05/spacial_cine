<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "connection.php");

function getFood()
{
    $db = connection::getConnection();

    $queryF = "SELECT * FROM comida";
    $resultado = $db -> query($queryF);
    return $resultado;
}
