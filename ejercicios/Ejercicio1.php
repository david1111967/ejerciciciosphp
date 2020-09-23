<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios</title>
</head>
<body>    
    <?php
        $edad = 21;
        $nombre = "David";
        $apellidos = "Godoy Ocon"
    ?>    
    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Edad</td>
        </tr>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $apellidos ?></td>
            <td><?php echo $edad ?></td>
        </tr>
    </table>    
</body>
</html>