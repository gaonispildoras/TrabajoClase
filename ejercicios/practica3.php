<?php


$a=["nombre" => "Juan" ];



foreach($a as $indice=>$valor){

    $$indice=$valor;
}
echo $nombre;


?>



