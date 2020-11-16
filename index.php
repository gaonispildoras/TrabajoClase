<?php 
include("inc/config.php");
include("inc/cabecera.php");
error_reporting(0);


switch($_POST["boton"]){
    default:
        include "inc/formulario.php";
        break;
    
    case "Aceptar":
        $bien=true;
        include "inc/valida.php";
            if ($bien == false){

                include "inc/formulario.php";
            }
            else{
                include("inc/proceso.php");

            }




}

include("inc/pie.php");
?> 