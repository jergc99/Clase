<?php 
    $edad = $_GET['edad'];
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    if ($edad < 18) {
        echo "Menor de edad<br>Nombre: ",$nombre, " ", $apellidos;
    } elseif ($edad > 64) {
        echo "Jubilado<br>Nombre: ",$nombre, " ", $apellidos;
    } else {
        echo "Mayor de edad<br>Nombre: ",$nombre, " ", $apellidos;
    }
?>