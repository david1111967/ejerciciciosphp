<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $EquiposBasket1 = array();
        $EquiposBasket2 = [];

        $EquiposBasket1[0] = "Michael Jordan";
        $EquiposBasket1[1] = "Magic Johnson";
        $EquiposBasket1[2] = "LeBron James";
        $EquiposBasket1[3] = "Kobe Bryant";
        $EquiposBasket1[4] = "Shaquille O'Neal";
        $EquiposBasket1[5] = "Kareem Abdul-Jabbar";
        $EquiposBasket1[6] = "Larry Bird";
        $EquiposBasket1[7] = "Tim Duncan";
        $EquiposBasket1[8] = "Wilt Chamberlain";
        $EquiposBasket1[9] = "Hakeem Olajuwon";
        $EquiposBasket1[10] = "Stephen Curry";
        $EquiposBasket1[11] = "Bill Russell";
        $EquiposBasket1[12] = "Karl Malone";
        $EquiposBasket1[13] = "Kevin Durant";
        $EquiposBasket1[14] = "Julius Erving";

        foreach ($EquiposBasket1 as $elemet) {
            echo ($elemet), "<br/>";
        }

        echo "<br/>";
        
        $EquiposBasket2[] = "Michael Jordan";
        $EquiposBasket2[] = "Magic Johnson";
        $EquiposBasket2[] = "LeBron James";
        $EquiposBasket2[] = "Kobe Bryant";
        $EquiposBasket2[] = "Shaquille O'Neal";
        $EquiposBasket2[] = "Kareem Abdul-Jabbar";
        $EquiposBasket2[] = "Larry Bird";
        $EquiposBasket2[] = "Tim Duncan";
        $EquiposBasket2[] = "Wilt Chamberlain";
        $EquiposBasket2[] = "Hakeem Olajuwon";
        $EquiposBasket2[] = "Stephen Curry";
        $EquiposBasket2[] = "Bill Russell";
        $EquiposBasket2[] = "Karl Malone";
        $EquiposBasket2[] = "Kevin Durant";
        $EquiposBasket2[] = "Julius Erving";

        foreach ($EquiposBasket2 as $elemet) {
            echo ($elemet), "<br/>";
        }
    ?>
</body>
</html>