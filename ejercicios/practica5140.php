<?php 
error_reporting(0);
$numero=$_POST["numero"];


if(preg_match("/[0-9]/" , $numero["numero1"])){
    $error1="Está bien";
}
else{
    $error1="Está mal";
}

if(preg_match("/^([0-9]+)$/" , $numero["numero2"])){
    $error2="Está bien";
}
else{
    $error2="Está mal";
}

if(preg_match("/^([0-9]*)(,|\.)([0-9]+)/", $numero["numero3"])){
    $error3="Está bien";
}
else{
    $error3="Está mal";
}
?>


<h2>Numero</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero1]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error1;?> 

<h2>Numero entero</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero2]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error2;?> 


<h2>Numero con decimal</h2>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" name="numero[numero3]" value="">
<input type="submit"><br><br>
</form>
<?php echo $error3;?> 