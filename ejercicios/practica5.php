

<form action="<?php $_SERVER['PHP_SELF'];?> " method="post">


<input type="checkbox" name="ram" value="ram">ram

<input type="checkbox" name="grafica" value="grafica">grafica

<input type="checkbox" name="cpu" value="cpu">cpu

<input type="submit" name="enviar">


</form>
<br>
<?php 
error_reporting(0);

if($_POST["enviar"]){

$array=["$_POST[ram]" , "$_POST[grafica]" ,  "$_POST[cpu]"];

echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";
echo $array[2];
echo "<br>";
print_r($array);

}

?> 
<hr><hr><br><br>
<?php /* 
error_reporting(0);

if($_POST["enviar"]){
$ram=$_POST["ram"];
$gpu=$_POST["grafica"];
$cpu=$_POST["cpu"];

    echo $ram; 
    echo "<br>";
    echo $gpu;
    echo "<br>";
    echo $cpu;


}
*/ 
?> 