<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial</h1>
    <?php                     
        if (isset($factoriales->result)){ 
            echo "<lu>";
                foreach ($factoriales->result as $element){
                    echo "<li>", $element, "</li>";
                }
            echo "</lu>";
        }        
    ?>   
</body>
</html>