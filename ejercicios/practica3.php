<?php

$a["nombre"] = "Juan";




foreach($a as $indice=>$valor){

    echo $indice;
    $$indice=$valor;
}
echo $nombre;

?>



