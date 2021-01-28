<?php
$dir="../carpeta_archivos";
$abrir=opendir($dir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 1</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>">

        <select name="" id="">
<?php
while($fichero=readdir($abrir)){
    if(! preg_match("/^\./",$fichero)){
?> 
    
        <option> <?php echo $fichero; ?> </option>
        
<?php  
        }       
    }
?> 
</select>
</form>

<?php
$dir2="../carpeta_archivos";
$abrir2=opendir($dir2);
?>

    <hr><h1>EJERCICIO 2</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>">

        <select name="" id="">
<?php
    while($fichero=readdir($abrir2)){

        if(preg_match("/(\.jpg|gif|png)$/",$fichero)){

?> 
    
        <option> <?php echo $fichero; ?> </option>
        
<?php  
        }       
    }
?>  
        </select> 
        <button name="enviar" type="submit">Enviar</button>
        </form>

<?php
$dir3="../carpeta_archivos";
$abrir3=opendir($dir3);
$archivo=$_POST["hola"];
echo $archivo;
unlink($archivo);
?>

        <hr><h1>EJERCICIO 3</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

        <select name="hola">
<?php
    while($fichero=readdir($abrir3)){

        if (!preg_match("/(^\.)/" ,$fichero))
        echo "<option>$fichero</option>";
        
    }
?>  
        </select> 
        <button name="enviar" type="submit">Borrar</button>
        </form>


</body>
</html>
