<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = 3;
        $divisor = 10;
        
        for($row = 1; $row <= $divisor; $row++){
            if($numero % $row == 0){                
                echo ($row), "<br/>";                
            }
        }
    ?>
</body>
</html>