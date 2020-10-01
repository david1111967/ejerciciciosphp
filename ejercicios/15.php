<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>Primer Nombre</label>
        <input type="text" value="" name="nombres[]">
        <br/>
        <label>Segundo Nombre</label>
        <input type="text" value="" name="nombres[]">
        <br/>
        <label>Tercer Nombre</label>
        <input type="text" value="" name="nombres[]">
        <br/>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_POST["nombres"])) {
            echo "<pre>", (var_dump($_POST["nombres"])), "</pre>";
        }        
    ?>
</body>
</html>