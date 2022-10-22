<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AGENDA DE CONTACTOS TELEFONICOS</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>AGENDA DE CONTACTOS TELEFONICOS</h1>
    <?php
    //Comprobamos si nos pasan el array agenda o por el contrario esta vacío y tenemos que crearla
    if(isset($_GET["agenda"])){
        $agenda = $_GET["agenda"];
    }else{
        $agenda = array();
    }

    //Comprobamos si el usuario nos envia el valor del submit
    if(isset($_GET["submit"])){
        $nombre_introducido = filter_input(INPUT_GET, "nombre_usuario");
        $numero_introducido = filter_input(INPUT_GET, "numero_usuario");
        //Programamos la reaccion a los diferentes campos vacíos o si todo está correcto
        if(empty($nombre_introducido)){
            echo "<p> Debes introducir un nombre. </p>";
        }elseif(empty($numero_introducido)){
            unset($agenda[$nombre_introducido]);
        }else{
            $agenda[$nombre_introducido] = $numero_introducido;
        }
    }
    
    ?>
    <h2>Introducir contacto</h2>
    <form>
        <?php
        foreach($agenda as $nombre => $numero){
            echo "<input type=\"hidden\" name=\"agenda[" . $nombre . "]\" value=\" " . $numero . " \"/>";
        }
        ?>
        <label for="nombre_usuario">Nombre : </label>
        <input type="text" name="nombre_usuario"><br><br>
        <label for="numero_usuario">Numero : </label>
        <input type="number" name="numero_usuario"><br><br>
        <input type="submit" name="submit"><br><br> <!--Se ha de introducir el name="submit" para que se procesen los valores -->
    </form>

    <h2>Agenda</h2>
    <?php //Mostramos todos los contactos de la agenda

    echo "<ol type=\"1\">";
    foreach($agenda as $nombre => $numero){
        echo "<li> <b>Nombre: </b>" . $nombre . " :<b> Nº de telefono: </b>" . $numero . "</li>";
    }
    echo "</ol>";
    ?>
</body>
</html>