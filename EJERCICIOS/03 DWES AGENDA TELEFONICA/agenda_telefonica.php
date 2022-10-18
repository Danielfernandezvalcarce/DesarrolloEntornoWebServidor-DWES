<?php

error_reporting(1);
//$nombreUsuario = $_GET["nombreUsuario"];
//$numeroUsuario = $_GET["numeroUsuario"];
$agenda = array();

$output = "<form action=\"\"><label for=\"nombreUsuario\">Nombre:</label><input type=\"text\" name=\"nombreUsuario\">
<label for=\"numeroUsuario\">Número:</label><input type=\"text\" name=\"numeroUsuario\"><button type=\"submit\">Enviar
</button>"; //formulario de inicio



for($i=0; $i<count($_GET); $i++){
    $agenda["Nombres"] = $_GET["nombreUsuario"];
    $agenda["Numeros"] = $_GET["numeroUsuario"];    
}

foreach($agenda as $Nombres => $nombreUsuario){
    $output = $output . "<input type=\"hidden\" name=\"nombresAgenda\" value=" . $agenda["Nombres"] . ">";
}
foreach($agenda as $Numeros => $numeroUsuario){
    $output = $output . "<input type=\"hidden\" name=\"numerosAgenda\" value=" . $agenda["Numeros"] . "> <br>";
}

$output = $output . "</form>";

var_dump($_GET);
echo ($output);
foreach($agenda as $Nombres => $nombreUsuario){
    echo($agenda["Nombres"] . " : " . $agenda["Numeros"] . "<br>");
}
echo("<br>" .count($agenda))

?>