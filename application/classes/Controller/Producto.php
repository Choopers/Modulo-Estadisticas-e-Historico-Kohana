<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Producto extends Controller {

	public function action_frmModificarNombreProducto(){
		$parametro = array();
		$session = Session::instance();

		$id = (isset($_POST['id']))?strip_tags($_POST['id']):0;
		$producto = (isset($_POST['producto']))?strip_tags($_POST['producto']):'';
		
		if ($session->get('logeado') == 1){
			$parametro['id'] = $id;
			$parametro['nombreproducto'] = $producto;

			$vista = Kodwoo_View::factory('frmModificarNombreProducto', $parametro);
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
	
		public function action_editarNombreProducto(){
		$parametro = array();
		$session = Session::instance();

		$id = (isset($_POST['id']))?strip_tags($_POST['id']):0;
		$producto = (isset($_POST['producto']))?strip_tags($_POST['producto']):'';
		
		if ($session->get('logeado') == 1){
			$model_producto = new Model_Producto();
			$model_producto->editarNombreProducto($id, $producto);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'MOD NOMBRE PRODUCTO: '.$id);

			
			echo $producto;
		}

		
	}
	
	public function action_fichaProducto(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$id = (isset($_POST['id']))?strip_tags($_POST['id']):0;
			$criterio = (isset($_POST['criterio']))?strip_tags($_POST['criterio']):'';
			
			$model_producto = new Model_Producto();
			$datos = $model_producto->getProductoID($id);

			$parametro['nombrepagina'] = 'Ficha Producto';
			$parametro['opcion'] = 4;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;
			$parametro['criterio'] = $criterio;

			$vista = Kodwoo_View::factory('fichaProducto', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Ficha Producto: '.$id);
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
} 
