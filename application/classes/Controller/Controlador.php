<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Controlador extends Controller {

	public function action_index(){
				
		$parametro = array();
	
		$vista = Kodwoo_View::factory('login', $parametro);
		$this->response->body($vista);
		
	}
	
	public function action_conexionRemota(){
		$model = new Model_Remoto();
		echo $model->conexion("http://www.google.com");
	}
	
	public function action_frmLogin(){
		$parametro = array();
	
		$vista = Kodwoo_View::factory('login', $parametro);
		$this->response->body($vista);
	}
} 
