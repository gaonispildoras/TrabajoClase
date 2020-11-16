<?php
include "inc/config.php";
include "inc/cabecera.php";
?>
<style>

</style>

<div class='divbase estilo1'>
<p>Asociando Eventos</p>
<p>
<button id='enlace1'>Estilo 1</button><br>
<a href='javascript:void(0)' id='enlace2'>Estilo 1</a><br>
</p>
<p>
<span id='m_todos'>Mostrar Todos</span><br/>
<span id='o_todos'>Ocultar Todos</span><br/>
No funciona en todos los navegadores.<br/> Algunos navegadores sólo adminten click en button, a href, input u otro elemento activo.
</p>
</div>
<div>
<pre>
$(selector).on('evento', funcion() {acciones en caso de evento.});
</pre>

Ejemplo:
<pre>
$('#enlace1').on('click',function(){
    $('#enlace1').hide();
    $('#enlace2').show();
});
</pre>
</div>

<script>
$('#enlace1').on('click',function(){
    $('#enlace1').hide();
    $('#enlace2').show();
});

$('#enlace2').on('click',function(){
    $('#enlace2').hide();
    $('#enlace1').show();
});

$('#m_todos').on('click',function(){
    $('#enlace2').show();
    $('#enlace1').show();
});

$('#o_todos').on('click',function(){
    $('#enlace2').hide();
    $('#enlace1').hide();
});
</script>


*************************************************
    <table>
<thead>
<tr>
  <th>Evento</th>
  <th>Descripción</th>
  <th>Elementos para los que está definido</th>
</tr>
</thead>
<tbody>
<tr>
  <td><code>onblur</code></td>
  <td>Un elemento pierde el foco</td>
  <td><code>&lt;button&gt;</code>, <code>&lt;input&gt;</code>, <code>&lt;label&gt;</code>, <code>&lt;select&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onchange</code></td>
  <td>Un elemento ha sido modificado</td>
  <td><code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, <code>&lt;textarea&gt;</code></td>
</tr>
<tr>
  <td><code>onclick</code></td>
  <td>Pulsar y soltar el ratón</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>ondblclick</code></td>
  <td>Pulsar dos veces seguidas con el ratón</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>onfocus</code></td>
  <td>Un elemento obtiene el foco</td>
  <td><code>&lt;button&gt;</code>, <code>&lt;input&gt;</code>, <code>&lt;label&gt;</code>, <code>&lt;select&gt;</code>, <code>&lt;textarea&gt;</code>, <code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onkeydown</code></td>
  <td>Pulsar una tecla y no soltarla</td>
  <td>Elementos de formulario y <code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onkeypress</code></td>
  <td>Pulsar una tecla</td>
  <td>Elementos de formulario y <code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onkeyup</code></td>
  <td>Soltar una tecla pulsada</td>
  <td>Elementos de formulario y <code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onload</code></td>
  <td>Página cargada completamente</td>
  <td><code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onmousedown</code></td>
  <td>Pulsar un botón del ratón y no soltarlo</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>onmousemove</code></td>
  <td>Mover el ratón</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>onmouseout</code></td>
  <td>El ratón "sale" del elemento</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>onmouseover</code></td>
  <td>El ratón "entra" en el elemento</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>onmouseup</code></td>
  <td>Soltar el botón del ratón</td>
  <td>Todos los elementos</td>
</tr>
<tr>
  <td><code>onreset</code></td>
  <td>Inicializar el formulario</td>
  <td><code>&lt;form&gt;</code></td>
</tr>
<tr>
  <td><code>onresize</code></td>
  <td>Modificar el tamaño de la ventana</td>
  <td><code>&lt;body&gt;</code></td>
</tr>
<tr>
  <td><code>onselect</code></td>
  <td>Seleccionar un texto</td>
  <td><code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code></td>
</tr>
<tr>
  <td><code>onsubmit</code></td>
  <td>Enviar el formulario</td>
  <td><code>&lt;form&gt;</code></td>
</tr>
<tr>
  <td><code>onunload</code></td>
  <td>Se abandona la página, por ejemplo al cerrar el navegador</td>
  <td><code>&lt;body&gt;</code></td>
</tr>
</tbody>
</table>



<?php
include "inc/pie.php";
?>
