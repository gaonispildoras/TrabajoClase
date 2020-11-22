<?php 
error_reporting(0);
$exterior=["Entrada"];
$entrada=["Cocina","Salón","Baño","Cochera","Escaleras", "Exterior"];
$cocina=["Lavadero","Entrada"];
$cochera=["Entrada", "Exterior"];
$escaleras=["Pasillo","Entrada"];
$pasillo=["Dormitorio1", "Dormitorio2", "Dormitorio3", "Baño", "Entrada"];


switch($_GET["donde"]){

default:
    if(!isset($_GET["donde"])){
        echo "Estás en la Calle <br/>";
        foreach($exterior as $valor){ 
            echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
            echo "<br/>";
        }
    }
    else{
    echo "Estás en $_GET[donde] <br/>";
        foreach($exterior as $valor){ 
            echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
            echo "<br/>";
        }
    }
break;

case "Entrada":
    echo "Estás en la $_GET[donde] <br/>";
        foreach($entrada as $valor){ 
            echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
            echo "<br/>";
        }

break;

case "Cocina":
    echo "Estás en la $_GET[donde] <br/>";
    foreach($cocina as $valor){ 
        echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
        echo "<br/>";
    }

break;

case "Cochera":
    echo "Estás en la $_GET[donde] <br/>";
    foreach($cochera as $valor){ 
        echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
        echo "<br/>";
    }

break;


case "Escaleras":
    echo "Estás en la $_GET[donde] <br/>";
    foreach($escaleras as $valor){ 
        echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
        echo "<br/>";
    }

break;

case "Pasillo":
    echo "Estás en la $_GET[donde] <br/>";
    foreach($pasillo as $valor){ 
        echo "<a href='$_SERVER[PHP_SELF]?donde=$valor'>$valor</a>";
        echo "<br/>";
    }

break;
}



?> 