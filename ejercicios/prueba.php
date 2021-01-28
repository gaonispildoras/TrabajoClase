<H1>INTENTO 1</H1>
<?php
$prueba = $_FILES["archivo"]["name"];
$prueba2 = $_FILES["archivo"]["tmp_name"];
echo $prueba; echo "<br>";
echo $prueba2;
if (isset($_POST["enviar"])){
    unlink($_FILES["archivo"]["tmp_name"]);
    
}

?>


<form action="<?php $_SERVER['PHP_SELF'];?>"  method="post" enctype="multipart/form-data">
    <input type="file" name="archivo" >
    <input type="submit" name="enviar">
</form>




<H1>INTENTO 2</H1>
<?php
$nombre_f = $_FILES["archivo"]["name"];
$ruta_f = $_FILES["archivo"]["tmp_name"];
echo $prueba; echo "<br>";
echo $prueba2;
if (isset($_POST["enviar"])){
    unlink("carpeta_archivos/".$nombre_f);
    
}

?>


<form action="<?php $_SERVER['PHP_SELF'];?>"  method="post" enctype="multipart/form-data">
    <input type="file" name="archivo" >
    <input type="submit" name="enviar">
</form>
