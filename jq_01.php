<?php
include "inc/config.php";
include "inc/cabecera.php";
?>
<style>
.estilo1 {position:absolute; top 10px: left:205px; width:200px; height:200px; border: 1px solid blue; background-color: #cccccc; color: black;}
.estilo2 {position:absolute; top 100px: left:100px; width:300px; height:300px; background-color: #11aa11; color: yellow;}
.estilo3 {top 500px: left:400px; width:300px; height:300px; background-color: #eeeeee;}
</style>

<div class='divbase estilo1'>
<p> Cambiando estilos con jQuery</p>
<p>
<a href='javascript:void(0)' onclick='$(".divbase").removeClass("estilo1");$(".divbase").addClass("estilo2");'>Estilo 2</a><br>
<a href='javascript:void(0)' onclick='$(".divbase").removeClass("estilo2");$(".divbase").addClass("estilo1");'>Estilo 1</a><br>
</p>


<div class='estilo3'>
    <div id='elem1'>
    <h2>Elemento 1</h2>
    </div>
    <div id='elem2'>
    <h2>Elemento 2</h2>
    </div>
  <p>
  <a href='javascript:void(0)' onclick='$("#elem1").show()'>Muestra Elemento 1</a><br>
  <a href='javascript:void(0)' onclick='$("#elem1").hide()'>Oculta Elemento 1</a><br>
  <a href='javascript:void(0)' onclick='$("#elem2").show()'>Muestra Elemento 2</a><br>
  <a href='javascript:void(0)' onclick='$("#elem2").hide()'>Oculta Elemento 2</a><br> 
  <br/>
  Poco a poco
  <br/>
<a href='javascript:void(0)' onclick='$("#elem1").fadeIn(1000)'>Muestra Elemento 1</a><br>
  <a href='javascript:void(0)' onclick='$("#elem1").fadeOut(2000)'>Oculta Elemento 1</a><br>
  <a href='javascript:void(0)' onclick='$("#elem2").fadeIn(1000)'>Muestra Elemento 2</a><br>
  <a href='javascript:void(0)' onclick='$("#elem2").fadeOut(2000)'>Oculta Elemento 2</a><br> 
  
  </p>
    
    
</div>


</div>




<?php
include "inc/pie.php";
?>
