<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $EquiposBasket1 = array("Michael Jordan", "Magic Johnson", "LeBron James", "Kobe Bryant", "Shaquille O'Neal", "Kareem Abdul-Jabbar", "Larry Bird", "Tim Duncan", "Wilt Chamberlain", "Hakeem Olajuwon", "Stephen Curry", "
        Bill Russell", "Karl Malone", "Kevin Durant", "Julius Erving");
        $EquiposBasket2 = ["Michael Jordan", "Magic Johnson", "LeBron James", "Kobe Bryant", "Shaquille O'Neal", "Kareem Abdul-Jabbar", "Larry Bird", "Tim Duncan", "Wilt Chamberlain", "Hakeem Olajuwon", "Stephen Curry", "
        Bill Russell", "Karl Malone", "Kevin Durant", "Julius Erving"];

        echo "<ul>";
        foreach ($EquiposBasket1 as $element){
            echo "<li>", ($element), "</li>";
        }
        echo "</ul>";

        echo "<br/>";

        echo "<ul>";
        foreach ($EquiposBasket2 as $posicion => $element){
            echo "<li>", ($posicion), " ", ($element), "</li>";            
        }
        echo "</ul>";
    ?>
</body>
</html>