<?php

$output = "";

define("alto", 10);
define("ancho", 10);

$output .= "<h1>Esto es una tabla de multiplicar de " . alto . "X" . ancho . ".</h1>";

$output .= "<table border= \"solid\">";

for($i=1; $i<=alto; $i++){
    $output .= "<tr>";
    for($j=1; $j<=ancho; $j++){
        $output .= "<td>" . $i*$j . "</td>";
    }
    $output .= "</tr>";
}

$output .= "</table>";

echo ($output);
?>