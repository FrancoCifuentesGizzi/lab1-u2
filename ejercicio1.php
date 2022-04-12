<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <!-- botón pra volver atrás -->
    <button onclick="location.href='index.html'"> Menú principal </button>
    <br><br>
    <!-- salto de linea y titulo -->
    <b>Tabla con números del 1 al 100</b>
    <br><br>
    <table border="1">
        <tr>
            <!-- tabla y php -->
            <?php
            $i = 1;
            // for que con el contador hace que vaya ingresando el valor del contador yq eu luego se sume 1
            for ($x = 1;$x <= 10; $x++ ) {
                 for ($y  =  1;$y <= 10; $y++ ) {
                    echo ("<td>"); 
                    echo ("$i");
                    echo ("</td>");
                    $i = $i + 1;
                }
                echo ("</tr>\n");
            }
     ?>
    </table>
</body>

</html>