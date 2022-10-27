<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <form>
        <label for="size">Introduce el tamaño del array que quieres ordenar:</label>
        <input type="number" name="size" required><br>
        <label for="max">Introduce hasta que numero máximo quieres ordenar:</label>
        <input type="number" name="max" required><br>
        <input type="submit" name="submit">
    </form>

    <?php
    //ALGORITMO DE ORDENACION MEDIANTE EL METODO DE SELECTION SORT, VA A ORDENAR UN ARRAY ALEATORIO DE LOS NUMEROS QUE SOLICITE EL USUARIO

    echo "<h1>METODO SELECTION SORT</h1>";
    //COMPROBAMOS QUE NOS HA LLEGADO EL SUBMIT Y RECOGEMOS LOS VALORES QUE NOS INTERESAN
    if(isset($_GET["submit"])){
        $array_size = intval(filter_input(INPUT_GET,"size"));
        $max_num = intval(filter_input(INPUT_GET, "max"));
        $desordenado = array();
        echo "<br> <h2>Array desordenado</h2> <br>";

        for ($x = 0; $x < $array_size; $x++) {
            $num = rand(0, $max_num);
            $desordenado[$x] = $num;
            echo $desordenado[$x] . ", ";
        }
    
        //ORDENAMOS LOS NUMEROS MEDIANTE EL METODO SELECTION SORT
        $posicionMinima;
        $auxiliar;
    
        for ($i = 0; $i < count($desordenado)-1; $i++) {
            $posicionMinima = $i;
            for ($j = $i + 1; $j < count($desordenado); $j++) {
                if ($desordenado[$j] < $desordenado[$posicionMinima]) {
                    $posicionMinima = $j;
                }
            }
            $auxiliar = $desordenado[$i];
            $desordenado[$i] = $desordenado[$posicionMinima];
            $desordenado[$posicionMinima] = $auxiliar;
        }
    
        echo "<br> <h2>Array ordenado</h2> <br>";
    
        for ($l = 0; $l < $array_size; $l++) {
            echo $desordenado[$l] . ", ";
        }
    }
    ?>
</body>
</html>