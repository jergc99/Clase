<?php
        $usuario = $_GET['usuario'];
        $contrasena = $_GET['contrasena'];

        $usuario1 = "a1";
        $contrau1="aaa";

        $usuario2 = "b2";
        $contrau2="bbb";

        $usuario3 = "c3";
        $contrau3 = "ccc";

        if ((strcmp($usuario, $usuario1)==0)&&(strcmp($contrasena,$contrau1)==0)) {
            echo "<br>usuario correcto";
        } elseif ((strcmp($usuario,$usuario2)==0)&&(strcmp($contrasena,$contrau1)==0)) {
            echo "usuario correcto";

        } elseif ((strcmp($usuario,$usuario3)==0)&&(strcmp($contrasena,$contrau3)==0)) {
            echo "usuario correcto";

        } else {
            echo "Incorrecto";
        }
    ?>