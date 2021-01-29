<?php
$fichero=file("carpeta_archivos/semana.txt");
    

?>

<form action="">
    <select name="" id="">
        <?php
        foreach($fichero as $fichero){
            $opcion = preg_split("/\:/", $fichero);
            echo "<option value='$opcion[0]'>$opcion[1]</option>";
        }
        ?>
    </select>

</form>

