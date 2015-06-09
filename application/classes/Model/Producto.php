<?php
class Model_Producto extends Kohana_Database_MySQL{
    
    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn,array());
    }
	
	public function getProductos($criterio = '%'){
		$parametros = array();		
		$parametros['criterio'] = $criterio;
		return $this->exec('getProductos', $parametros,'return');
	}
	
	public function getProductoId($id){
		$parametros = array();		
		return $this->exec('getProductoId', $parametros,'return');
	}
	
	public function editarNombreProducto($id, $producto){
		$parametros = array();		
		$parametros['id'] = $id;
		$parametros['producto'] = $producto;
		$this->exec('editarNombreProducto', $parametros,'none');
	}
        public function StockCritico(){
		$parametros = array();		
		return $this->exec('StockCritico', $parametros,'return');
	}
    
}

?>