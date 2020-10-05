<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php                     
        if (isset($fibonacci->result)){ 
            echo "<lu>";
                foreach ($fibonacci->result as $element){
                    echo "<li>", $element, "</li>";
                }
            echo "</lu>";
        }        
    ?>      
</body>
</html>