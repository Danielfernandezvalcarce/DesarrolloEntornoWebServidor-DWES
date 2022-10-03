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

        $multiplicador = 10;

        $output = "<table border=\"2\"><tr><th>MULTIPLICADOR</th><th>MULTIPLICADO</th><th>RESULTADO</th></tr>";

        for($i=0; $i<=10; $i++){
            $output = $output . "<tr><td>" . $multiplicador . "</td><td>" . $i . "</td><td>" . $multiplicador*$i . "</td></tr>";
        }

        echo $output;
    ?>
    </main>
</body>
</html>