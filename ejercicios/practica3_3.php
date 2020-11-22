<h1>ACTIVIDAD 1</h1>
<hr>
<?php
error_reporting(0);


function factorial($num1){
$acum=1;
for($i=1; $i<=$num1; $i++){
$acum = $i * $acum;


}
    echo $acum;
}

factorial (6);
?>


<h1>ACTIVIDAD 2</h1>
<hr>

<?php 

function encabezado($texto){

    echo "<h1> $texto <h1/>";

}

    encabezado(Adios);
?> 


<hr><hr>


<?php

function escribe()
{
global $valor;
echo $valor;
}


$valor="Un café por favor";
escribe();



?>




