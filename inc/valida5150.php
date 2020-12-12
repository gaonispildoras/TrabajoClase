<?php
error_reporting(0);
$datos=$_POST["datos"];

//Nombre Apellido
if(preg_match("/^([A-Z][a-z]+\s?){2,4}$/", $datos["nom_ape"])){

    $error="Es correcto";
}
else{
    $error="no es correcto";
}
//Edad
if(preg_match("/^([0-9]){1,2}$/", $datos["edad"])){

    $error2="Es correcto";
}
else{
    $error2="no es correcto";
}

//Dirección
if(preg_match("/^([A-Z][a-z]+)$/", $datos["direc"])){

    $error3="Es correcto";
}
else{
    $error3="no es correcto";
}

?>

