<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Potencias de 2</h1>
    <?php                     
        if (isset($potencias2->result)){ 
            echo "<lu>";
                foreach ($potencias2->result as $position=>$element){
                    echo "<li>", "2 ^ ", ($position + 1), " = ", $element, "</li>";
                }
            echo "</lu>";
        }        
    ?>   
</body>
</html>