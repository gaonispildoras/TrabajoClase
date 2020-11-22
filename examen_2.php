<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo Ejercicio</title>
</head>
<body>
    <h1>Reserva Hotel</h1>
    <?php
        $fecha1= new DateTime($_POST['fecha1']);
        $fecha2= new DateTime($_POST['fecha2']);
        $calculo= $fecha1->diff($fecha2);
        $multiplicar=$calculo->days*60;
    ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method=post>
        Fecha entrada: <input type="date" name="fecha1"><br>
        Fecha Salida: <input type="date" name="fecha2"><br><br>
        <input type="submit">

        <hr>

        <?php 
            echo "El total de dias de su viaje es de: $calculo->days";
            echo "<br>";
            echo "El importe total seria de: $multiplicar";
        ?>
    </form>
</body>
</html>