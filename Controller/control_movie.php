<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../Libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require(LIBRARIES_PATH."connection.php");

function obtenerPeliculasPronto()
{
    $db = connection::getConnection();

    $queryM = "SELECT img, titulo, sinopsis, fecha_estreno,genero,precio FROM peliculas
    WHERE disponible = 0";
    $resultado = $db -> query($queryM);
    return $resultado;
}

function ObtenerPeliculasCartelera()
{
    $db = connection::getConnection();

    $queryM = "SELECT img, titulo, sinopsis, fecha_estreno,genero,precio FROM peliculas
    WHERE disponible = 1";
    $resultado = $db -> query($queryM);
    return $resultado;
}

function obtenerPeliculasDisponibles()
{
    $db = connection::getConnection();

    $queryM = "SELECT img, titulo, sinopsis, fecha_estreno,genero,precio FROM peliculas
    WHERE disponible = 1 AND vista_previa = 1";
    $resultado = $db -> query($queryM);
    return $resultado;
}

function obtenerPeliculasEspera()
{
    $db = connection::getConnection();

    $queryM = "SELECT img, titulo, sinopsis, fecha_estreno,genero,precio FROM peliculas
    WHERE disponible = 0 AND vista_previa = 1";
    $resultado = $db -> query($queryM);
    return $resultado;
}

function obtenerTodasPeliculas () {
    $db = Connection::getConnection();

    $queryMovies = "SELECT * FROM peliculas";
    $result = $db -> query($queryMovies);
    return $result;
}

function obtenerUnaPelicula($id) {
    $db = Connection::getConnection();
    $queryMovies = "SELECT * FROM peliculas WHERE id=" .$id;
    $result = $db -> query($queryMovies);
    if ($result -> num_rows > 0) {
        return $result;
    }
    return null;
}

function actualizarUnaPelicula($id, $img, $titulo, $sinopsis, $fecha_estreno, $genero, $precio, $disponible, $vista_previa) {
    $db = connection::getConnection();
    $queryMovies = "UPDATE peliculas SET  img ='$img', titulo = '$titulo', sinopsis = '$sinopsis', fecha_estreno ='$fecha_estreno', genero = '$genero', precio = '$precio', disponible = '$disponible', vista_previa = '$vista_previa' WHERE id=" .$id;
    $db -> query($queryMovies);
}
if (isset($_POST['actualiza_pelicula'])) {
    actualizarUnaPelicula($_POST["id"], $_POST["img"], $_POST["titulo"], $_POST["sinopsis"] , $_POST["fecha_estreno"], $_POST["genero"], $_POST["precio"], $_POST["disponible"], $_POST["vista_previa"]);
    header("Location: ".VIEWS_PATH."admin_config_movie.php");
}

function eliminarUnaPelicula($id) {
    $db = connection::getConnection();

    $queryMovies = "DELETE FROM pelicula WHERE id=" .$id;
    $db -> query($queryMovies);
}
if (isset($_GET["elimina"]) && isset($_GET["id"])) {
    eliminarUnaPelicula($_GET["id"]);
    header("Location: ".VIEWS_PATH."admin_config_movie.php");
}

function nuevaPelicula($img, $titulo, $sinopsis, $fecha_estreno, $genero, $precio, $disponible, $vista_previa) {
    $db = connection::getConnection();

    $queryMovies = "INSERT INTO peliculas (img, titulo, sinopsis, fecha_estreno, genero, precio, disponible, vista_previa) VALUES ('$img', '$titulo', '$sinopsis', '$fecha_estreno', '$genero', '$precio', '$disponible', '$vista_previa')";
    $db ->  query($queryMovies);
}
if (isset($_POST['nueva_pelicula'])) {
    nuevaPelicula($_POST["img"], $_POST["titulo"], $_POST["sinopsis"] , $_POST["fecha_estreno"], $_POST["genero"], $_POST["precio"], $_POST["disponible"], $_POST["vista_previa"]);
    header("Location: ".VIEWS_PATH."admin_config_movie.php");
}