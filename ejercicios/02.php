<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php        
        $num = 8;
        $maxmultiplicador = 10;
        
        for ($row = 1; $row <= $maxmultiplicador; $row++) {            
            echo "$num * $row = "; 
            echo ($num * $row);
            echo "<br/>";
        }
    ?>
</body>
</html>