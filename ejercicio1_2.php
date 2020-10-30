<?php
include("inc/cabecera.php");

$calle=["vestibulo" => "vestibulo"];
$vestibulo=["calle" => "Calle" , "salon" => "Salón" , "comedor" => "Comedor", "pasillo" => "Pasillo"];
$pasillo=["dorm1" => "Dormitorio1", "dorm2" => "Dormitorio 2" , "cocina" => "Cocina", "aseo2" => "Aseo 2", "escalera" => "Escalera", "vestibulo" => "Vestibulo"];
$dorm1=["aseo1" => "Aseo 1", "pasillo" => "Pasillo"];
$aseo1=["dorm1" => "dorm1"];

switch($_GET["donde"]){

   
    case "vestibulo":
        echo "Estás en $_GET[donde]<br/>";
        foreach($vestibulo as $valor => $indice){
            echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$indice<br/></a>";
        }
    break;
    
    case "pasillo":
        echo "Estás en $_GET[donde]<br/>";
            foreach($pasillo as $valor => $indice){
                echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$indice<br/></a>";
            }
    break;

    case "dorm1":
        echo "Estás en $_GET[donde]<br/>";
        foreach($dorm1 as $valor => $indice){
            echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$indice<br/></a>";
        }
    break;

    case "aseo1":
        echo "Estás en $_GET[donde]<br/>";
        foreach($aseo1 as $valor => $indice){
            echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$indice<br/></a>";
        }
    break;

    default:
        echo "Estás en $_GET[donde]<br/>";
            foreach($calle as $valor => $indice){
                echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$indice</a>";
            }
    break;

}






?>