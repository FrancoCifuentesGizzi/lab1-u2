<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <h1>Tabla con imágenes del directorio</h1>
    <table border="2" >
        <tr>
            <?php
            // se abre php
                // variable contador y de ruta
                $i = 0;
                $ruta = "fotos/";
                // se abre la cartepa de archivos
                $filehandle = opendir($ruta);
                // se recorren los archivos y se inserta la imagen
                while ($file = readdir($filehandle)) {
                    if ($file != "." && $file != "..") {
                        ?>
                        <Td><img src=<?php echo $ruta.$file ?> width="300px"></Td>
                        <?php
                        $i = $i + 1;
                        // si el contador llega a multiplos de 4 se termina la fila y pasa a otra columna
                    if($i % 4 == 0){
                        echo('</tr>');
                    }
                } 
            }
        // se cierra la carpeta de archivos
        closedir($filehandle);
        ?>
    </table>
</body>

</html>