<?php
$dir="../carpeta_archivos";
$abrir=opendir($dir);
?>
    <h1>EJERCICIO 2</h1>
        <form action="<?php $_SERVER['PHP_SELF']; ?>">

        <select name="" id="">
<?php
    while($fichero=readdir($abrir)){

        if(preg_match("/(\.jpg|gif|png)$/",$fichero)){

?> 
    
        <option> <?php echo $fichero; ?> </option>
        
<?php  
        }       
    }
?>  
        </select> 
        <button name="enviar" type="submit">Enviar</button>
        </form>