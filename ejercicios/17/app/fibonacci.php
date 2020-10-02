<?php
    $numero = 10;
    $fibonacci1 = 1;
    $fibonacci2 = 1;
    $result = array();

    for($row = 0; $row <= $numero; $row++){
        $result[] = $fibonacci2;
        $fibonacci2 = $fibonacci1 + $fibonacci2;
        $fibonacci1 = $fibonacci2 - $fibonacci1;            
    }
?>