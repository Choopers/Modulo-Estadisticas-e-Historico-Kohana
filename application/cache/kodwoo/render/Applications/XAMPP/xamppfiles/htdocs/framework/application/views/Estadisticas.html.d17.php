<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'cabecera.html', null, null, null, '_root', null);?>

<body >
    <?php echo Dwoo_Plugin_include($this, 'titulo.html', null, null, null, '_root', null);?>

    <?php echo Dwoo_Plugin_include($this, 'menu.html', null, null, null, '_root', null);?>

    <div class="contenido" align="center">
        <p> −	Reportes de actividades por usuario  <input type="button" value="Entrar" onclick="location.href = 'http://localhost/framework/index.php/Home/ReportesUsuarios'"/> </br>
        <p> −	Estadísticas de salida de productos <input type="button" value="Entrar" onclick="location.href = 'http://localhost/framework/index.php/Home/ReporteSalidaProductos'" />
        <p> −	Estadísticas de comportamiento de usuarios<input type="button" value="Entrar" onclick="location.href = 'http://localhost/framework/index.php/Home/ComportamientoUsuarios'" />
        <p> −	Estadisticas de productos con stock critico<input type="button" value="Entrar" onclick="location.href = 'http://localhost/framework/index.php/Home/StockCritico'" />
        <p> −	Registro de actividades<input type="button" value="Entrar" onclick="location.href = 'http://localhost/framework/index.php/Home/MantenedorUsuarios'" />
            </table>

    </div>
</body>
<?php echo Dwoo_Plugin_include($this, 'pie.html', null, null, null, '_root', null);?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>