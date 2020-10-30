<?php
include("inc/cabecera.php");


switch($_GET["donde"]){

case "vestibulo":
    echo "Estás en el vestibulo<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=salon'>Salón</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=comedor'>Comedor</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=pasillo'>Pasillo</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=calle'>Calle</a><br/>";

break;

case "salon":
    echo "Estás en el Salón<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=vestibulo'>Vestibulo</a><br/>";

break;

case "comedor":
    echo "Estás en el Comedor<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=vestibulo'>Vestibulo</a><br/>";

break;


case "pasillo":
    echo "Estás en el pasillo<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=dorm1'>Dormitorio 1</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=dorm2'>Dormitorio 2</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=cocina'>Cocina</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=aseo2'>Aseo 2</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=escalera'>Escalera</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=vestibulo'>Vestibulo</a><br/>";

break;

case "dorm1";
    echo "Estás en el dormitorio 1<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=aseo1'>Aseo 1</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=pasillo'>Pasillo</a><br/>";

break;

case "cocina";
    echo "Estás en la Cocina<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=despensa'>Despensa</a><br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=pasillo'>Pasillo</a><br/>";

break;

default:
    echo "Estás en la calle<br/>";
    echo "<a href='$_SERVER[PHP_SELF]?donde=vestibulo'>Vestibulo</a><br/>";
break;
}














?>