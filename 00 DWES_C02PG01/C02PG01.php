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
        function t_f($var){
            if($var == 1){
                return "true";
            }else{
                return "false";
            }
        };
            echo
                "<table border = \"1\">
                    <tr>
                        <th>Contenido de la variable \$var</th>
                        <th>isset(\$var)</th>
                        <th>empty(\$var)</th>
                        <th>bool(\$var)</th>
                    </tr>";
                $var = null;
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = 0;
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = true;
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = false;
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = "0";
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = "";
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = "foo";
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>";
                $var = array();
                echo
                    " <tr>
                        <td>\$var = null;</td>
                        <td>" . t_f(isset($var)) . "</td>
                        <td>" . t_f(empty($var)) . "</td>
                        <td>" . t_f((bool) $var) . "</td>
                    </tr>
                </table>";

        ?>
    </main>
</body>
</html>