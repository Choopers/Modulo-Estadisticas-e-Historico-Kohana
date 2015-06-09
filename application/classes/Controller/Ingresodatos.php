<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ingresodatos extends Controller {

	public function action_addProducto(){
		$artista = isset($_POST['artista'])?strip_tags($_POST['artista']):'';
		$model = new Model_Artista();
		$model->addArtista($artista);
		
		$this->getListadoGrupos();
	}
	
	private function getListadoGrupos(){
		$model = new Model_Artista();
		
		$parametro = array();
		$parametro['datos'] = $model->getArtistas();
	
		$vista = Kodwoo_View::factory('listadoartista', $parametro);
		$this->response->body($vista);
	}
} 
