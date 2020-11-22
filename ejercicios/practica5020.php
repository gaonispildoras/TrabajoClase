<?php error_reporting(0);?> 
<h1>Actividad 1</h1>
<hr>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <select name="idiomas[]">
        <option value="español">Español</option>
        <option value="hungaro">Hungaro</option>
        <option value="fines">Finés</option>
        <input type="submit">
    
    </select>
</form>
<?php 
$idioma=$_POST["idiomas"];
echo "Has seleccionado el idioma: $idioma[0]";
?>

<h1>Actividad 2</h1>
<hr>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <select name="estado">
        <option value="Casado">Casado</option>
        <option value="Soltero">Soltero</option>
        <option value="Viudo">Viudo</option>
        <input type="submit">
    
    </select>
</form>
<?php 
$estado=$_POST["estado"];
echo "Tu estado civil es: $estado";
?>

<h1>Actividad 3</h1>
<hr>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <input type="textarea" name="texto">
    <input type="submit">

</form>
<?php 
    $texto=$_POST["texto"];
    echo "Has escrito: $texto"; 
?> 

<h1>Actividad 4</h1>
<hr>
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <input type="checkbox" name="componente[]" value="ram">Ram <br>
    <input type="checkbox" name="componente[]" value="cpu">Cpu <br>
    <input type="checkbox" name="componente[]" value="gpu">Gpu <br>
    <input type="checkbox" name="componente[]" value="fuente">Fuente de alimentación <br>
    <input type="checkbox" name="componente[]" value="pila">Pila <br>
    <input type="submit">
</form>
<?php 
$componentes=$_POST["componente"];
echo "Has seleccionado: ";
    foreach($componentes as $valor){
        echo "$valor ";
    }
?> 

<h1>Actividad 5</h1>
<hr>

<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
    <select multiple name="consola[]">
        <option value="Xbox">XBOX SERIE X</option>
        <option value="PS5">PS 5</option>
        <option value="Switch">Nintendo Switch</option>
        <input type="submit">
    
    </select>
</form>
<?php 
$consola=$_POST["consola"];
echo "Has seleccionado: ";
    foreach($consola as $valor){
        echo "$valor ";
    }
?> 