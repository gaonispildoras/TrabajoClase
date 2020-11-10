<?php 
error_reporting(0);

switch($_REQUEST["op"]){

    default:
        echo "<form action='$_SERVER[PHP_SELF]' method=POST>";
        echo "<input type='text' name='nombre'>";
        echo "<input type=submit name=op value=validar>";
        echo "</form>";
    break;

    case "validar":
        if(!isset($_POST["nombre"]) || $_POST["nombre"]==""){

            echo "<form action='$_SERVER[PHP_SELF]' method=POST>";
            echo "<input type=’text’ name='nombre'>";
            echo "<input type=submit name=op value=validar>";
            echo "</form>";
            echo "Introduce un nombre";

        }
        else{
            
            echo "Nombre: $_POST[nombre]";
        
        }
    break;    
}






?>