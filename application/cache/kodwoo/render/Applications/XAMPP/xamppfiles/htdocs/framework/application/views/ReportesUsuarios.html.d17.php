<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'cabecera.html', null, null, null, '_root', null);?>

<body >
    <?php echo Dwoo_Plugin_include($this, 'titulo.html', null, null, null, '_root', null);?>

    <?php echo Dwoo_Plugin_include($this, 'menu.html', null, null, null, '_root', null);?>

    <h1><?php echo $this->scope["lucho"];?></h1>
    <div class="contenido">
        <form action="http://localhost/framework/index.php/Home/ReportesUsuarios2" method="POST" name="formulario" >
            <table align="center" >
                <tr><td>Usuario</td><td><select name="usuario"  id="usuario" > 
                                                <option value="0">Seleccione un Usuario</option>

                            <?php 
$_fh0_data = (isset($this->scope["datos"]) ? $this->scope["datos"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
<a class="enlace" href="http://localhost/framework/index.php/Home/pico" >
                            <option value=" <?php echo $this->scope["row"]['user'];?> "  ><?php echo $this->scope["row"]['nombre'];?></option>
                            </a>
                            <?php 
/* -- foreach end output */
	}
}?>

                    
            </select><input type="submit" value="Buscar"/> </td></tr>
<span id="contenido"></span>
            </table>
<?php if (count((isset($this->scope["user"]) ? $this->scope["user"] : null)) > 0) {
?>
		<table>
			<tr>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Evento</th>
				
			</tr>
			<?php 
$_fh1_data = (isset($this->scope["user"]) ? $this->scope["user"] : null);
if ($this->isArray($_fh1_data, true) === true)
{
	foreach ($_fh1_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
				<tr>
					<td><?php echo $this->scope["row"]['fecha'];?></td>
                                        
					<td><?php echo $this->scope["row"]['evento'];?></td>
					
					<td><?php echo $this->scope["row"]['hora'];?></td>
				</tr>
			<?php 
/* -- foreach end output */
	}
}
else {
?>
				<tr>
					<td colspan="4"> Sin Eventos</td>
				</tr>
			<?php 
}?>

		</table>
		<?php 
}?>

            </body>
            <?php echo Dwoo_Plugin_include($this, 'pie.html', null, null, null, '_root', null);?>



<script type="text/javascript">

$(document).ready(function(){
	$("#usuario").change(function(){
		var op = $("#usuario option:selected").val();
		$('#contenido').html(op);
	});
});
</script><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>