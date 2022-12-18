<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <main>
        <form>
            <h2>Ordenar Array Aleatorio</h2>
            <label for="size">Introduce el tamaño del array que quieres ordenar:</label>
            <input type="number" name="size" required><br><br>
            <label for="max">Introduce hasta que numero máximo quieres ordenar:</label>
            <input type="number" name="max" required><br><br>
            <label for="select">Introduce el metodo de ordenacion que quieres usar:</label>
            <select name="metodo" required>
                <option value="bubble">BubbleSort</option>
                <option value="selection">SelectionSort</option>
            </select>
            <input type="submit" name="submit" value="Aleatorio">
        </form>
        <form>
            <h2>Ordenar Array Predeterminado</h2>
            <p>El array predeterminado se elige aleatoriamente por la computadora</p>
            <select name="metodo" required>
                <option value="bubble">BubbleSort</option>
                <option value="selection">SelectionSort</option>
            </select>
            <input type="submit" name="submit" value="Predeterminado">
        </form>
        <form>
            <h2>Ordenar array introducido manualmente</h2>
            <input type="text" name="array" required>
            <p>Ejemplo: 0 1 2 ...</p>
            <select name="metodo" required>
                <option value="bubble">BubbleSort</option>
                <option value="selection">SelectionSort</option>
            </select>
            <input type="submit" name="submit" value="Manual">
        </form>
    </main>

    <style>
        main {
            display: flex;
            flex-direction: row;
        }

        main>form {
            border: solid;
            margin: 1%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            background-color: grey;
        }
    </style>
    <?php

    /**
     * @author Daniel Fernandez Valcarce
     * 
     */

    echo "<br><br>_______________________________________________________________________________RESULTADO___________________________________________________________________<br><br>";

    //Condicion para saber a que funcion llamar
    if (isset($_GET["submit"])) {
        if ($_GET["submit"] == "Aleatorio") {
            generarArrayAleatorio();
        } elseif ($_GET["submit"] == "Predeterminado") {
            generarArrayPredeterminado();
        } elseif ($_GET["submit"] == "Manual") {
            ordenarArrayUsuario();
        }
    }

    //Funcion para generar un array aleatorio introduciendo el usuario el tamaño y el maximo de numeros a ordenar
    function generarArrayAleatorio()
    {

        $array_size = intval(filter_input(INPUT_GET, "size"));
        $max_num = intval(filter_input(INPUT_GET, "max"));
        $desordenado = array();
        echo "<br> <h2>Array desordenado</h2> <br>";

        for ($x = 0; $x < $array_size; $x++) {
            $num = rand(0, $max_num);
            $desordenado[$x] = $num;
            echo $desordenado[$x] . ", ";
        }

        //condicion para saber a que metodo de ordenacion llamar
        if ($_GET["metodo"] == "bubble") {
            bubbleSort($desordenado);
        } elseif ($_GET["metodo"] == "selection") {
            selectionSort($desordenado);
        }
    }

    //Funcion para generar un array predeterminado el usuario solo debe escoger el metodo para ordenar.
    //Esta funcion funciona como una matriz predeterminada, solo que con numeros generados aleatoriamente.
    function generarArrayPredeterminado()
    {
        $max_num = rand(0, 1000);
        $array_size = rand(0, $max_num);
        $desordenado = array();
        echo "<br>Vamos a ordenar un array de longitud: " . $array_size . " y números del 0 al " . $max_num .  " generados aleatoriamente.";
        echo "<br> <h2>Array desordenado</h2> <br>";

        for ($x = 0; $x < $array_size; $x++) {
            $num = rand(0, $max_num);
            $desordenado[$x] = $num;
            echo $desordenado[$x] . ", ";
        }

        //Condicion para saber a que metodo de ordenacion llamar
        if ($_GET["metodo"] == "bubble") {
            bubbleSort($desordenado);
        } elseif ($_GET["metodo"] == "selection") {
            selectionSort($desordenado);
        }
    }

    //Funcion para ordenar array dandonos el usuario el array

    function ordenarArrayUsuario()
    {
        $numeros = $_GET["array"];
        $array = explode(" ", $numeros);

        echo "<br> <h2>Array desordenado</h2> <br>";

        for ($x = 0; $x < count($array); $x++) {
            echo $array[$x] . ", ";
        }

        //Condicion para saber que metodo usar
        if ($_GET["metodo"] == "bubble") {
            bubbleSort($array);
        } elseif ($_GET["metodo"] == "selection") {
            selectionSort($array);
        }
    }

    //Funcion para el metodo BubbleSort
    function bubbleSort($desordenado)
    {
        echo "<h1>METODO BUBBLE SORT</h1>";
        $timeStart = microtime(true);
        for ($j = 0; $j < count($desordenado); $j++) {
            for ($k = 0; $k < count($desordenado) - 1; $k++) {
                if ($desordenado[$k] > $desordenado[$k + 1]) {
                    $auxiliar = $desordenado[$k];
                    $desordenado[$k] = $desordenado[$k + 1];
                    $desordenado[$k + 1] = $auxiliar;
                }
            }
        }
        $timeEnd = microtime(true);
        imprimirArray($desordenado, $timeEnd, $timeStart);
    }

    //Funcion para el metodo Selection Sort
    function selectionSort($desordenado)
    {
        echo "<h1>METODO SELECTION SORT</h1>";
        $timeStart = microtime(true);
        for ($i = 0; $i < count($desordenado) - 1; $i++) {
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
        $timeEnd = microtime(true);
        imprimirArray($desordenado, $timeEnd, $timeStart);
    }

    //Funcion que imprime el array
    function imprimirArray($desordenado, $timeEnd, $timeStart)
    {
        echo "<br> <h2>Array ordenado</h2>";

        for ($l = 0; $l < count($desordenado); $l++) {
            echo $desordenado[$l] . ", ";
        }

        $tiempo_de_ejecucion = ($timeEnd - $timeStart) * 1000;

        echo "<br><br>Tiempo de ejecucion " . $tiempo_de_ejecucion . "ms (milisegundos)";
    }

    ?>
</body>