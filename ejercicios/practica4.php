<h1>Actividad 1</h1>
<hr>
<a href="<?php $_SERVER["PHP_SELF"]?>?nombre=pablo&apellido=garcia&calle=13">Actualizar</a>


<?php 
error_reporting(0);
echo "<br/>";
echo $_GET["nombre"] ;
echo "<br/>";
echo $_GET["apellido"];
echo "<br/>";
echo $_GET["calle"];

?>



<h1>Actividad 2</h1>
<hr>

<?php 

echo "<br/>";
echo $_GET["nombre"] ;
echo "<br/>";
echo $_GET["apellido"];
echo "<br/>";
echo $_GET["calle"];
echo "<br/>";

if(!isset($_GET["nombre"])){
    $contador=1;

}
else{
    
    $contador=$_GET["contador"]+1;


}

echo $contador;

echo "<a href='$_SERVER[PHP_SELF]?nombre=pablo&apellido=garcia&calle=13&contador=$contador'>Actualizar</a>";

?> 

<h1>Actividad 3</h1>
<hr>

<?php 

echo "<a href='$_SERVER[PHP_SELF]?arrayb[nombre]=pablo&arrayb[apellido]=garcia'>Actualizar</a>";
echo "<br/>";

$arrayb=$_GET["arrayb"];
foreach($arrayb as $valor){
    echo $valor;
    echo "<br/>";

}
echo "<br/>";
print_r($arrayb);


?> 


