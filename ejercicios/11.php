<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>título</label>
        <input type="text" value="" name="titulo">
        <br/>
        <label>autor</label>
        <input type="text" value="" name="autor">
        <br/>
        <label>editorial</label>
        <input type="text" value="" name="editorial">
        <br/>
        <label>páginas</label>
        <input type="number" value="" name="paginas">
        <br/>
        <input type="submit" value="Enviar">
    </form>
    <?php
        echo "<hr>";
        echo "Titulo: ", ($_POST["titulo"]), "<br/>";
        echo "Autor: ", ($_POST["autor"]), "<br/>";
        echo "Editorial: ", ($_POST["editorial"]), "<br/>";
        echo "Paginas: ", ($_POST["paginas"]), "<br/>";
    ?>
</body>
</html>