<!DOCTYPE html>
<html lang="en">
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
            echo($fibonacci2);
            $fibonacci2 = $fibonacci1 + $fibonacci2;
            $fibonacci1 = $fibonacci2 - $fibonacci1;
            echo "<br/>";
        }
    ?>
</body>
</html>