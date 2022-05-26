<?php 
session_start();
    $mensaje ="";

    if(isset($_POST['btnAccion'])) {
        switch ($_POST['btnAccion']) {
            case 'agregar':
                if (is_string($_POST['titulo'])) {
                  $Titulo = $_POST['titulo']; 
                } else {
                    $mensaje = "Algo pasa con el titulo."; break;}
                break;

                if (is_numeric($_POST['precio'])) {
                    $Precio = $_POST['precio'];
                } else {
                    $mensaje = "Algo pasa con el precio."; break;
                }

                if (is_numeric($_POST['cantidad'])) {
                    $Cantidad = $_POST['cantidad'];
                } else {
                    $mensaje = "Algo pasa con la cantidad"; break;
                }
            
          if (!isset($_SESSION['cart'])) {
              $pelicula = array(
                  'titulo' => $Titulo,
                  'precio' => $Precio,
                  'cantidad' => $cantidad
              );
              $_SESSION['cart'][0] = $pelicula;
          } else {
              $numeroPeliculas = count($_SESSION['cart']);
              $pelicula = array(
                'titulo' => $Titulo,
                'precio' => $Precio,
                'cantidad' => $cantidad
            );
            $_SESSION['cart'][$numeroPeliculas] = $pelicula;
          }
          $mensaje = print_r($_SESSION, true);
                break;
        }
    }
