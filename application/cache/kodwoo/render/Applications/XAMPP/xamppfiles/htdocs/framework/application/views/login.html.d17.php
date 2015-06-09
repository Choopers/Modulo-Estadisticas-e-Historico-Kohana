<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'cabecera.html', null, null, null, '_root', null);?>

<body >
	
	<div id="body">	 
                <table width="600px" >
                    
                    <tr height="20px">
                        
                    </tr>
                    <tr align="center">
                        <td height="100px"><a alt="Evaluacion II" target="_blank"><img src="http://construccionesmaureira.cl/Imagen/logo.png"/></td>	
                        <p>Intranet Administracion</p>
                    </tr>
                    <tr>
                        <td colspan="4" align="center"><h1>Prueba Nº2 </h1></td>
                    </tr>
                    <tr>
                        <td height="15px"></td>
                    </tr>
                </table>
               <form method="post" action="http://localhost/framework/index.php/Login/validarUsuario">
                    <TABLE width="600px" align="center">
                        <tr>
                            <td> Nombre <td> <input type="text" name="usuario" id="usuario" /></td></td>
                        </tr>
                        <td>  Clave <td><input type="password" name="password" id="password" atributo1="Usuario no Valido!" /> </td></td>
                </form>
                <tr>   
                    <td><td> <input type="submit" value="Login"></td></td>  
                </tr> 
                <tr>
                    <td>  <p>.</p></td>
                    <td>  <p>.</p></td>
                </tr>
   
                <tr>
                    <td colspan="4" align="center" height="50px"><a alt="Hostname Cpanel vps" href="http://www.hostname.cl" target="_blank">Construcciones y Moldajes Maureira</a></td>   
                </tr>    
                </TABLE>
            </div>
	
	<p id="resultado">
		sin resultado
	</p>
</body>



            


<?php echo Dwoo_Plugin_include($this, 'pie.html', null, null, null, '_root', null);?>


<script type="text/javascript" >
	
	$("form").submit(function(event){
		event.preventDefault();
		var action = $(this).attr('action');
		var usuario = $("#usuario").val();
		var password = $("#password").val();
		
		$.post(action, { usuario: usuario, password: password}, 
			function(data){
				if (data == 1){
					location.href = 'http://localhost/framework/index.php/Home';
				}else{
					$("#resultado").html($("#password").attr("atributo1"));
				}
			}
		);

		
	});
	
	

</script><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>