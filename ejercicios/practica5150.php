<?php 
include("../inc/valida5150.php");
?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

    <p>Nombre y Apellidos</p>
    <input type="text" name="datos[nom_ape]"><?php echo $error;?>

    <p>Edad</p>
    <input type="text" name="datos[edad]"><?php echo $error2;?>

    <p>Dirección</p>
    <input type="text" name="datos[direc]"><?php echo $error3;?>

    <p>Código Postal</p>
    <input type="text" name="datos[cp]"><?php echo $error4;?>

    <p>Provincia</p>
    <select name="datos[provincia]">
        <option value="malaga">Málaga</option>
        <option value="sevilla">Sevilla</option>
        <option value="huelva">Huelva</option>
    </select>

    <p>Tipo de S.O que utiliza</p>
    <input type="checkbox" name="datos[linux]" value="linux">Linux
    <input type="checkbox" name="datos[win]" value="windows">Windows
    <input type="checkbox" name="datos[ios]" value="ios">iOS

    <p>Mac de su tarjeta de red</p>
    <input type="text" name="datos[red]">

    <p>Lista de componentes que lleva</p>
    <select multiple name="datos[compo]">
        <option value="ram">Memoria RAM</option>
        <option value="cpu">Procesador</option>
        <option value="gpu">Gráfica</option>
    </select>

    <p>¿Solicita desayuno?</p>
        <input type="radio" name="datos[radio]" value="si">si
        <input type="radio" name="datos[radio]" value="no">no

    <p>Comentarios</p>
        <textarea name="datos[comen]"cols="30" rows="10"></textarea><br>

    <input type="submit">

</form>