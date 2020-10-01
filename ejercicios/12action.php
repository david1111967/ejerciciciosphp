<?php
    if (empty($_POST["nombre"]) || isset($_POST) == false){
        echo '<form method="post" action="12action.php">
                <label>Nombre</label>
                <input type="text" value="" name="nombre">
                <br/>
                <input type="submit" value="Enviar">
            </form>';
    }
    else {
        echo "Hola ", ($_POST["nombre"]);
    }
?>