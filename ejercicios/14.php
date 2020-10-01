<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php
        $form = '<form method="post" action=""><label>Primer operador: </label><input type="text" value="" name="primeroperador"><br/><label>Segundo operador: </label><input type="text" value="" name="segundooperador"><br/><label>Operación: </label><select name="operador"><option value="suma" selected>Suma</option><option value="resta">Resta</option><option value="division">División</option><option value="multiplicacion">Multiplicación</option></select><br/><input type="submit" value="Enviar"></form>';        

        if (empty($_POST["primeroperador"]) || isset($_POST["primeroperador"]) == false || empty($_POST["segundooperador"]) || isset($_POST["segundooperador"]) == false ){
            echo $form;
            echo '<p id="mensaje">Rellene todos los campos<p>';
        }
        else {
            if (is_numeric($_POST["primeroperador"]) && is_numeric($_POST["segundooperador"])){
                switch ($_POST["operador"]) {
                    case "suma":
                        echo "Resultado de la suma: ", ($_POST["primeroperador"]), " + ", ($_POST["segundooperador"]), " = ", ($_POST["primeroperador"] + $_POST["segundooperador"]);
                        break;
                    case "resta":
                        echo "Resultado de la resta: ", ($_POST["primeroperador"]), " - ", ($_POST["segundooperador"]), " = ", ($_POST["primeroperador"] - $_POST["segundooperador"]);
                        break;
                    case "division":
                        echo "Resultado de la división: ", ($_POST["primeroperador"]), " / ", ($_POST["segundooperador"]), " = ", ($_POST["primeroperador"] / $_POST["segundooperador"]);
                        break;                
                    case "multiplicacion":
                        echo "Resultado de la multiplicación: ", ($_POST["primeroperador"]), " * ", ($_POST["segundooperador"]), " = ", ($_POST["primeroperador"] * $_POST["segundooperador"]);
                        break;
                }
            }
            else {
                echo $form;
                echo '<p id="mensaje">Rellene todos los campos e Introduzca solo numeros<p>';
            }
        }
    ?>
</body>
</html>