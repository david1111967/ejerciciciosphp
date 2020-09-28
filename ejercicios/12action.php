<?php
    if (empty($_POST["nombre"])){
        echo "hola";
    }
    else {
        echo "Hola ", ($_POST["nombre"]);
    }