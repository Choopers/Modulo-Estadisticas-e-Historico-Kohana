<?php
/* template head */
if (function_exists('Dwoo_Plugin_date_format')===false)
	$this->getLoader()->loadPlugin('date_format');
/* end template head */ ob_start(); /* template body */ ?><div class="titulo">
	<div>
		<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" />
	</div>
	<div>
		<h1><?php echo $this->scope["nombrepagina"];?></h1>
	</div>
	<div>
		<span><?php echo $this->scope["usuario"];?>, <?php echo Dwoo_Plugin_date_format($this, (isset($this->globals["now"]) ? $this->globals["now"]:null), "%d-%m-%Y", null);?></span>
	</div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>