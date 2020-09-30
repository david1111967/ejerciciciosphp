<?php
    if (empty($_POST["nombre"]) || isset($_POST)){
        echo "hola";
    }
    else {
        echo "Hola ", ($_POST["nombre"]);
    }