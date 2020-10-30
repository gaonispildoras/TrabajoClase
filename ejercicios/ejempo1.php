<?php

echo "<!DOCUMENT_TYPE html>";
echo "<html><head>";
echo "<tittle> EJEMPLO 1 </head> <body>";

echo "<div>";

echo "<p>La página es $_SERVER[PHP_SELF]<br/>";


if empty($_GET["dia"]){

    echo "Cargando la pagina por primera vez";

}


echo "<a href='$_SERVER[PHP_SELF]?dia=viernes&mes=octubre'></a>";





?>
