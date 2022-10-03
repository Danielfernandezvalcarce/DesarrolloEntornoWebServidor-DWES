<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php
        echo "<h1>ESTO ES LA TABLA DE MULTIPLICAR DEL 10</h1>";

        for($i=0; $i<=10; $i++){
            $multiplicador = $i;
            $output = "<table border=\"2\"><tr><th>MULTIPLICADOR</th><th>MULTIPLICADO</th><th>RESULTADO</th></tr>";

            for($j=0; $j<=10; $j++){
                $output = $output . "<tr><td>" . $multiplicador . "</td><td>" . $j . "</td><td>" . $multiplicador*$j . "</td></tr>";
            }
            $output = $output . "</table> <br>";
            echo $output;
        }
    ?>
    </main>
</body>
</html>