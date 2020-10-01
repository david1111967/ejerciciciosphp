<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php
        echo '<form method="post" action=""><label>Nombre: </label><input type="text" value="" name="nombres[]"><br/><input type="submit" value="Enviar">';        
        echo "<ul>";
        if (isset($_POST["nombres"])) {            
            foreach ($_POST["nombres"] as $key => $nombre){
                echo "<input type=\"text\" value=\"$nombre\" name=\"nombres[]\" hidden>";
                echo "<li>", $nombre, "</li>";                
            }            
        }    
        echo "</ul>";
        echo "</form>"
    ?>
</body>
</html>