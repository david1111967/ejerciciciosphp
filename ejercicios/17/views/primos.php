<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numeros Primos 1 a 10000</h1>
    <?php                     
        if (isset($primos->result)){ 
            echo "<lu>";
                foreach ($primos->result as $element){
                    echo "<li>", $element, "</li>";
                }
            echo "</lu>";
        }        
    ?>
</body>
</html>