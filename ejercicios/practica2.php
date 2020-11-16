<link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
<script src="../librerias/jquery-3.5.1.js"></script>
<script src="../librerias/bootstrap/js/bootstrap.js"></script>

<h1>Actividad 1</h1>
<hr>
<?php

for($i=0; $i<=10; $i++){

    echo $i;

}

?>
<br><br>
<h1>Actividad 2</h1>
<hr>

<table class="table table-hover table-dark table-striped">
    <tr>
        <th>division</th>
        <th>resto</th>
    </tr>
<?php 
    for($i=0; $i<=100; $i++){        
        $resultado = $i % 7;
        ?>       
        <tr>
            <td><?php echo "$i / 7" ;?></td>
            <td><?php echo $resultado;?> </td>
        </tr>


<?php
    }
?>  