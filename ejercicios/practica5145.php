<?php 
error_reporting(0);
$numero=$_POST["numero"];


if(preg_match("/([0-9]{5})/" , $numero["numero1"])){
    $error1="Está bien";
}
else{
    $error1="Está mal";
}

if(preg_match("/^(29)([0-9]{3}$)/" , $numero["numero2"])){
    $error2="Está bien";
}
else{
    $error2="Está mal";
}

if(preg_match("/^(https?:\/\/)(www)(\.)([a-zA-Z0-9]+)(\.)([a-z]{2,4}$)/" , $numero["numero3"])){
    $error3="Está bien";
}
else{
    $error3="Está mal";
}

if(preg_match("/^(https?)|(ftp)(:\/\/)(www)(\.)([a-zA-Z0-9]+)(\.)([a-z]{2,4}$)/" , $numero["numero4"])){
    $error4="Está bien";
}
else{
    $error4="Está mal";
}

if(preg_match("/^([a-zA-Z0-9]+)(@)([a-zA-Z0-9]+)(\.)([a-z]{2,4})$/" , $numero["numero5"])){
    $error5="Está bien";
}
else{
    $error5="Está mal";
}

if(preg_match("/^([a-z_?A-Z_?0-9]+)(\.)(gif|jpg|png)$/" , $numero["numero6"])){
    $error6="Está bien";
}
else{
    $error6="Está mal";
}

if(isset($_POST["submit"])){
    $web=$_POST["numero7"];
    $web2=read($web);

}



?>

<h2>Codigo Postal</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero1]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error1;?> 


<h2>Codigo Postal de Málaga</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero2]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error2;?> 


<h2>URL de una WEB</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero3]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error3;?> 

<h2>URL de una WEB o FTP</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero4]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error4;?> 

<h2>Correo electrónico</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero5]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error5;?> 

<h2>Subir fichero</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero6]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error6;?> 


<h2>Extraer hipervínculos</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero7]" value="">
<input type="submit" name="submit"><br><br>
</form>
<?php echo $error7;?>





