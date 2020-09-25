<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $EquiposBasket = array("alero" => "Michael Jordan", "base" => "Magic Johnson", "pivot" => "LeBron James", "escolta" => "Kobe Bryant");

        foreach ($EquiposBasket as $posicion => $element){
            echo ($posicion), ": ", ($element), '<br>';
        }
    ?>
</body>
</html>