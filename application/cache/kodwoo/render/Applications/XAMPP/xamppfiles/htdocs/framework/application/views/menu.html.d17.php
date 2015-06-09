<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>	<div class="menu" >
		<ul>
			<li><?php if ((isset($this->scope["opcion"]) ? $this->scope["opcion"] : null) == 1) {
?>Actividades por usuario<?php 
}
else {
?><a href="http://localhost/framework/index.php/Home">Principal</a><?php 
}?></li>
			<li><?php if ((isset($this->scope["opcion"]) ? $this->scope["opcion"] : null) == 2) {
?>Salida de productos<?php 
}
else {
?><a href="http://localhost/framework/index.php/Home/listadoProductos">Salida de productos</a><?php 
}?></li>
			<li><?php if ((isset($this->scope["opcion"]) ? $this->scope["opcion"] : null) == 3) {
?>Comportamiento de usuarios<?php 
}
else {
?><a href="http://localhost/framework/index.php/Home/buscarProductos">Comportamiento de usuarios</a><?php 
}?></li>
			<li><a href="#">Salir</a></li>
		</ul>
	</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>