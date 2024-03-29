
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once("import1.php"); ?>
    
    <h1>Ejemplos de PHP Parte 1</h1>
    <?php
        
        /*function foo(iterable $iterable) {
            foreach ($iterable as $valor) {
                echo $valor."</br>";
            } 
        }*/

        function calcularOperaciones(int $num1, int $num2){
            $operaciones = [
                "Suma" => $num1 + $num2,
                "Resta" => $num1 - $num2,
                "Multiplicacion" => $num1 * $num2,
                "Division" => $num1 / $num2,
            ];
            return $operaciones;
        }

        echo "<h3> El resultado de las operaciones es: </h3>";
        $arrOperaciones = calcularOperaciones(8, 4);

        foreach ($arrOperaciones as $clave => $valor){
            echo "La operacion ".$clave." el resultado es: ".$valor." </br>";
        }

        //var_dump(foo(["Hola", "Mundo"]));

        echo "<pre>";
        var_dump($arrOperaciones);
        echo "</pre>";
        ?>
</body>
</html>
