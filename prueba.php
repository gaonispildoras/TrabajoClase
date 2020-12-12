<?php 
$array=preg_split("/\n/", $_POST["select"]);

?>
 
<form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
    <textarea name="select" id="" cols="30" rows="10"></textarea>
    <input type="submit">
</form>

<form action="">
<select name="" >
    <?php foreach($array as $valor){
        echo "<option value='$valor'>$valor</option>";
    }
    ?>
</select>
</form>

