<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(!isset($_GET["dia"])){

    echo "Es la primera vez que entras a la pagina";

}
else{

}
echo "\n";

if (!isset($_GET["contador"])){

    echo $contador=1;
    
    
}
else{

    $contador=$_GET["contador"] + 1;
    
}
echo $contador;

?>
<a href="<?php $_SERVER['PHP_SELF'];?>?dia=viernes&mes=octubre&contador=<?php $contador; ?>">Misma Página</a>


</body>
</html>

