<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <!-- botón para volver atras -->
    <button onclick="location.href='index.html'"> Menú principal </button>
    <br><br>
    <b>Tabla con tamaño N</b>
    <table border="1">
        <tr>
            <!-- tabla y php -->
            <?php
            // se define tamaño y N
            define('TAM', 30);
            $i = 1;
            // contador para ingresar valor yb luego sumarle 1, con tamañao TAM
            for ($x = 1;$x <= TAM; $x++ ) {
                if($x % 2 == 0)
                // cuando encuentra un valor par se le cambia el color a esa fila
                    echo "<tr bgcolor=grey>";
                else
                    echo "<tr>";
                 for ($y  = 1 ;$y <= TAM; $y++ ) {
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