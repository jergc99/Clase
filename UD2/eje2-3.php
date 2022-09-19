<?php
    $num = $_GET['num'];
    if ($num == 1) {
        echo "Es Lunes";
    } else if ($num == 2) {
        echo "Es Martes";
    } else if ($num == 3) {
        echo "Es Miercoles";
    } else if ($num == 4) {
        echo "Es Jueves";
    } else if ($num == 5) {
        echo "Es Viernes";
    } else if ($num == 6) {
        echo "Es Sabado";
    } else if ($num == 7) {
        echo "Es Domingo";
    } else {
        echo "Numero incorrecto";
    }
?>