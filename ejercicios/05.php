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
        $count = 0;

        for ($row = 1; $row <= $numero; $row++){
            if ($numero % $row == 0){
                echo ($row);
                echo "<br/>";
                $count++;
            }            
        }
                    
        if ($count > 2){
            echo "No es Primo";
        }
        else {
            echo "El $numero es un numero Primo";     
        }                                        
    ?>
</body>
</html>