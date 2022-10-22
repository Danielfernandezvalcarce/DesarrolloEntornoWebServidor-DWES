<?php
//ALGORITMO DE ORDENACION MEDIANTE EL METODO DE BURBUJA, VA A ORDENAR UN ARRAY ALEATORIO DE 100 NUMEROS
echo "<h1>METODO BURBUJA</h1>";

$desordenado = array();

//GENERAMOS EL ARRAY DE 100 NUMEROS ALEATORIOS
$array_size = 100;

echo "<br> <h2>Array desordenado</h2> <br>";

for($i=0; $i<$array_size; $i++){
    $num = rand(0, $array_size);
    $desordenado[$i] = $num;
    echo $desordenado[$i] . ", ";
}

//ORDENAMOS LOS NUMEROS MEDIANTE EL METODO BURBUJA

for($j=0; $j<count($desordenado); $j++){
    for($k=0; $k<count($desordenado)-1; $k++){
        if($desordenado[$k] > $desordenado[$k+1]){
            $auxiliar = $desordenado[$k];
            $desordenado[$k] = $desordenado[$k+1];
            $desordenado[$k+1] = $auxiliar;
        }
    }
}

echo "<br> <h2>Array ordenado</h2> <br>";

for($l=0; $l<$array_size; $l++){
    echo $desordenado[$l] . ", ";
}

?>