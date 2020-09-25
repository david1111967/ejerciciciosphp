<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php        
        define("NUM", 8);
        $maxmultiplicador = 10;
        
        for ($row = 1; $row <= $maxmultiplicador; $row++) {            
            echo NUM, " * $row = ", (NUM * $row), "<br/>";            
        }
    ?>
</body>
</html>