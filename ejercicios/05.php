<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("NUM", 8);        
        $count = 0;

        for ($row = 1; $row <= NUM; $row++){
            if (NUM % $row == 0){
                echo ($row),"<br/>";
                $count++;
            }            
        }
                    
        if ($count > 2){
            echo "El ", (NUM), " no es Primo";
        }
        else {
            echo "El ", (NUM), " es un numero Primo";     
        }                                        
    ?>
</body>
</html>