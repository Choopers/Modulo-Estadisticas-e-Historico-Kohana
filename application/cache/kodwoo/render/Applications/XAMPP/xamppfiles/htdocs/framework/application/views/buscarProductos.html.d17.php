<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'cabecera.html', null, null, null, '_root', null);?>

<body >
	<?php echo Dwoo_Plugin_include($this, 'titulo.html', null, null, null, '_root', null);?>

	<?php echo Dwoo_Plugin_include($this, 'menu.html', null, null, null, '_root', null);?>

	<div class="contenido">
		<form method="post" action="http://localhost/framework/index.php/Home/buscadorProductos" >
			Producto: <input type="text" name="criterio" id="criterio" value="<?php echo utf8_encode((isset($this->scope["criterio"]) ? $this->scope["criterio"] : null));?>" /><input type="submit" value="Buscar!" />
		</form>
		<br />
		<?php if (count((isset($this->scope["datos"]) ? $this->scope["datos"] : null)) > 0) {
?>
		<table>
			<tr>
				<th>Prod ID</th>
				<th>Producto</th>
				<th>Marca</th>
				<th>Stock</th>
			</tr>
			<?php 
$_fh0_data = (isset($this->scope["datos"]) ? $this->scope["datos"] : null);
if ($this->isArray($_fh0_data, true) === true)
{
	foreach ($_fh0_data as $this->scope['row'])
	{
/* -- foreach start output */
?>
				<tr>
					<td><a class="buscar" pid="<?php echo $this->scope["row"]['id'];?>" href="http://localhost/framework/index.php/Producto/fichaProducto" ><?php echo $this->scope["row"]['id'];?></a></td>
					<td><?php echo utf8_decode((isset($this->scope["row"]['producto']) ? $this->scope["row"]['producto']:null));?></td>
					<td><?php echo $this->scope["row"]['marca'];?></td>
					<td><?php echo $this->scope["row"]['cantidad'];?></td>
				</tr>
			<?php 
/* -- foreach end output */
	}
}
else {
?>
				<tr>
					<td colspan="4">Busqueda Sin Resultados</td>
				</tr>
			<?php 
}?>

		</table>
		<?php 
}?>		
	</div>
</body>
<?php echo Dwoo_Plugin_include($this, 'pie.html', null, null, null, '_root', null);?>


<script type="text/javascript">

	$(".contenido").click(
		function(event){
			event.preventDefault();
			var contenedor = $(this).parent();
			contenedor.load($(this).attr('href'), { id: $(this).attr("pid"), producto: $(this).html()});
		}
	);
	
</script><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>