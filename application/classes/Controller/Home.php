<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$parametro['nombrepagina'] = 'Módulo Estadísticas e Histórico';
			$parametro['opcion'] = 1;
			$parametro['usuario'] = $session->get('nombreusuario');
			$vista = Kodwoo_View::factory('Estadisticas', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Principal');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
        public function action_ReportesUsuarios(){
            $parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$model_usuario = new Model_Usuario();
			$datos = $model_usuario->ListarUsuarios();

			$parametro['nombrepagina'] = 'Reportes Usuarios';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;
                        $parametro['user'] = null;
                        $parametro['lucho'] = "BIEN LOCO";
			$vista = Kodwoo_View::factory('ReportesUsuarios', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
         public function action_ReportesUsuarios2(){
            $parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$model_usuario = new Model_Usuario();
                        $model_bitacora = new Model_Bitacora();
			$datos = $model_usuario->ListarUsuarios();
                        $cuser = trim((isset($_POST['usuario']))?strip_tags($_POST['usuario']):'');
                        $user= $model_bitacora->BuscarUsuario($cuser);
			$parametro['nombrepagina'] = 'Reportes Usuarios';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;
                        $parametro['user'] = $user;
                        $parametro['lucho'] = $cuser;
			$vista = Kodwoo_View::factory('ReportesUsuarios', $parametro);
			
			
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
	
        
        public function action_ReporteSalidaProductos(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$Model_BitacoraProductos = new Model_BitacoraProductos();
			$datos = $Model_BitacoraProductos ->diezmovimientos();

			$parametro['nombrepagina'] = '10 Productos con mas movimientos';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;

			$vista = Kodwoo_View::factory('ReporteSalidaProductos', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado 10 Movimientos Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}

        
        
	public function action_listadoProductos(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$model_producto = new Model_Producto();
			$datos = $model_producto->getProductos();

			$parametro['nombrepagina'] = 'Listado Productos';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;

			$vista = Kodwoo_View::factory('listadoProductos', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
public function action_MantenedorProducto(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$model_producto = new Model_Producto();
			$datos = $model_producto->getProductos();

			$parametro['nombrepagina'] = 'Mantenedor  Productos';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;

			$vista = Kodwoo_View::factory('MantenedorProducto', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}

	public function action_admin(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$parametro['nombrepagina'] = 'Buscar Productos';
			$parametro['opcion'] = 3;
			$parametro['usuario'] = $session->get('nombreusuario');

			$vista = Kodwoo_View::factory('buscarProductos', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Buscar Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
		public function action_buscarProductos(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$parametro['nombrepagina'] = 'Buscar Productos';
			$parametro['opcion'] = 3;
			$parametro['usuario'] = $session->get('nombreusuario');

			$vista = Kodwoo_View::factory('buscarProductos', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Buscar Productos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
        
	public function action_buscadorProductos(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$criterio = (isset($_POST['criterio']))?strip_tags($_POST['criterio']):'';
			
			$model_producto = new Model_Producto();
			$datos = $model_producto->getProductos($criterio);

			$parametro['nombrepagina'] = 'Listado Productos';
			$parametro['opcion'] = 3;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;
			$parametro['criterio'] = $criterio;

			$vista = Kodwoo_View::factory('buscarProductos', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Buscar Productos: '.$criterio);
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
        
        public function action_ComportamientoUsuarios(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$Model_BitacoraProductos = new Model_BitacoraProductos();
			$datos = $Model_BitacoraProductos ->movimientosUsuarios();

			$parametro['nombrepagina'] = 'Usuarios con mas Movimientos 5';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;

			$vista = Kodwoo_View::factory('ComportamientoUsuarios', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado 5 Usuarios Mas Movimientos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
         public function action_StockCritico(){
		$parametro = array();
		$session = Session::instance();

		if ($session->get('logeado') == 1){
			$model_producto = new Model_Producto();
			$datos = $model_producto->StockCritico();

			$parametro['nombrepagina'] = 'Stock Critico';
			$parametro['opcion'] = 2;
			$parametro['usuario'] = $session->get('nombreusuario');
			$parametro['datos'] = $datos;

			$vista = Kodwoo_View::factory('StockCritico', $parametro);
			
			$model_bitacora = new Model_Bitacora();
			$model_bitacora->ingresarEventoUsuario($session->get('usuario'), 'PAG: Listado 5 Usuarios Mas Movimientos');
		}else{
			$vista = Kodwoo_View::factory('errorlogin', $parametro);
		}

		$this->response->body($vista);
	}
        
} 
