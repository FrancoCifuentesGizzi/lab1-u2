<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método get</title>
</head>

<body>
    <!-- botón para volver al menú -->
    <button onclick="location.href='index.html'"> Menú principal </button>
    <!-- formulario para pedir información de la tabla -->
    <form action="ejercicio3get.php" method="GET">
        <input type="number" min=1 placeholder="Ingresar tamaño de la tabla" name="TAM">
        <input type="color" name="color">
        <input type="submit" value="Crear Tabla">
    </form>
    <br>
    <hr>
    <b>Tabla construída con método GET</b>
    <!-- tabla  -->
    <table border="1">
        <tr>
            <!-- se inicia php -->
            <?php
            // cambio de comentado en php
            // variables tamaño y color llamadas del formulario
            $TAM = $_GET['TAM'];
            $color = $_GET['color'];
            // variable contador para ingresado de números en la tabla
            $i = 1;
            // for para tamaño TAM
            for ($x = 1;$x <= $TAM; $x++ ) {
                // si es par esta tendrá color
                if($x % 2 == 0)
                    echo "<tr bgcolor=$color>";
                else
                // sino se salta
                    echo "<tr>";
                // for para tamaño TAM, y hacerla de forma matricial
                 for ($y  = 1 ;$y <= $TAM; $y++ ) {
                    echo ("<td>"); 
                    // se ingresa el valor del contador
                    echo ("$i");
                    echo ("</td>");
                    // contador suma 1 y se guarda
                    $i = $i + 1;
                }
                // termina fila y salto de linea
                echo ("</tr>\n");
            }
     ?>
     <!-- termina php y tabla -->
    </table>
</body>

</html>