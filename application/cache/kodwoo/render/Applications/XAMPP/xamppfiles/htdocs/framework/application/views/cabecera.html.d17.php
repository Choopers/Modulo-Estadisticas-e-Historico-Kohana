<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="es"> <!--<![endif]-->

<head>
	<title>Página de prueba</title>
	<style>
		.titulo { width: 100%; height: 60px; border-bottom: 5px solid gray;}
		.titulo img{ width: 55px}
		.titulo div{ float:left}
		.titulo span{ margin-top:50px; margin-left: 100px}
		.contenido { float: left; width: 100%; margin-left: 25px; margin-top: 15px}
		.contenido table tr:nth-child(odd){ background: gray}
		.menu li{ float: left; padding: 10px; list-style-type: none}
	</style>
            
</head><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>