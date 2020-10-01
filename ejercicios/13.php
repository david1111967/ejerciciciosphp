<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>      
    <?php
        $form = '<form method="post" action=""><label>Nombre: </label><input type="text" value="" name="nombre" required><br/><input type="submit" value="Enviar"></form>';

        if (empty($_POST["nombre"]) || isset($_POST["nombre"]) == false){
            echo $form;
            echo '<p id="mensaje">Rellene todos los campos<p>';
        }
        else {
            if (strlen($_POST["nombre"]) < 3){
                $nombre = $_POST["nombre"];
                echo '<form method="post" action=""><label>Nombre: </label><input type="text"', "value='$nombre'", 'name="nombre" required><br/><input type="submit" value="Enviar"></form>';
                echo '<p id="mensaje">Introduce un Nombre más largo<p>';
            }  
            else {
                echo "Hola ", ($_POST["nombre"]);
            }                      
        }
    ?>
</body>
</html>