<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $paises = array();
        $paises[] = "España";
        $paises[] = "Francia";
        $paises[] = "Alemania";
        $paises[] = "Portugal";

        foreach ($paises as $element){
            echo ($element), "<br/>";
        }
    ?>
</body>
</html>