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
		<table>
			<tr>
				<th>Usuario</th>
                                <th>Nombre</th>
                                <th>Moviemientos</th>
                              
                              
				
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
					<td><?php echo $this->scope["row"]['usuario'];?></td>
				       
					<td><?php echo $this->scope["row"]['nombre'];?></td>
                                        <td><?php echo $this->scope["row"]['movimientos'];?></td>
                                        
                                      
				</tr>
			<?php 
/* -- foreach end output */
	}
}
else {
?>
				<tr>
					<td colspan="4">Movimientos</td>
				</tr>
			<?php 
}?>

		</table>
			
	</div>
</body>
<?php echo Dwoo_Plugin_include($this, 'pie.html', null, null, null, '_root', null);
 /* end template body */
return $this->buffer . ob_get_clean();
?>