<?php defined('SYSPATH') or die('No direct script access.');
//session_start();
class Controller_Login extends Controller {

		
	public function action_validarUsuario(){
		$model_login = new Model_Usuario();
		$usuario = isset($_POST['usuario'])?strip_tags($_POST['usuario']):'';
		$password = isset($_POST['password'])?strip_tags($_POST['password']):'';
		
		$resultado = $model_login->validarUsuario($usuario, $password);
		$session = Session::instance();
		
		$model_bitacora = new Model_Bitacora();
		
		if (isset($resultado[0])){			
			$session->set('logeado', 1);
			$session->set('nombreusuario', $resultado[0]['nombre']);
			$session->set('usuario', $usuario);
			$model_bitacora->ingresarEventoUsuario($usuario, 'LOGIN');
			echo "1";
		}else{
			$session->set('logeado', 0);
			$model_bitacora->ingresarEventoUsuario($usuario, 'LOGIN-FAIL');
			echo "0";
		}
	}

} 
