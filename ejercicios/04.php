<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = 10;
        $fibonacci1 = 1;
        $fibonacci2 = 1;
        
        for($row = 0; $row <= $numero; $row++){
            echo ($fibonacci2), "<br/>";
            $fibonacci2 = $fibonacci1 + $fibonacci2;
            $fibonacci1 = $fibonacci2 - $fibonacci1;            
        }
    ?>
</body>
</html>