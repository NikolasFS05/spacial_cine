<?php
    if (!defined('CONFIG_PATH')) {
        define('CONFIG_PATH', '../config/');
    }

    require_once(CONFIG_PATH . "config.php");

    class Connection
    {
        public static function getConnection(){
            $connector = new mysqli(HOST, USER, PASSWORD, DB);
            if (mysqli_connect_errno()) {
                echo "Error conectandose a la base de datos";
            }
            return $connector;
        }
    }
?>