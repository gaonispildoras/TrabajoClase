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

if(preg_match("/^(www)(\.)([a-zA-Z0-9])(\.)([a-z]{2,4}$)/" , $numero["numero3"])){
    $error3="Está bien";
}
else{
    $error3="Está mal";
}

/*if(isset($_POST["submit"])){
    $URL=var_dump(parse_url($numero["numero4"], PHP_URL_SCHEME));
    $host=var_dump(parse_url($numero["numero4"], PHP_URL_HOST));

    
}*/

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





<h2>EXTRAER HIPERVÍNCULOS</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<a href=""></a>
<input type="text" name="numero[numerox]" value="">
<input type="submit" name="submit"><br><br>
</form>
<?php  echo "el tipo de hipervinculo es $URL y el nombre de la página es $host";?> 




