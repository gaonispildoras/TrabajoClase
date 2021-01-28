<?php
$prueba = $_FILES["archivo"]["tmp_name"];
echo $prueba;
if (isset($_POST["enviar"])){
    unlink($_FILES["archivo"]["tmp_name"]);
    
}

?>


<form action="<?php $_SERVER['PHP_SELF'];?>"  method="post" enctype="multipart/form-data">
    <input type="file" name="archivo" >
    <input type="submit" name="enviar">
</form>