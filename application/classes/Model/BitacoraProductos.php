<?php
class Model_BitacoraProductos extends Kohana_Database_MySQL{
    
    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn,array());
    }
	
	
     public function Buscar(){
                $parametros = array();
		
        return $this->exec('buscar', $parametros, 'return');
        
    }
    public function diezmovimientos(){
                $parametros = array();
		
        return $this->exec('diezmovimientos', $parametros, 'return');
        
    }
     
    public function movimientosUsuarios(){
                $parametros = array();
		
        return $this->exec('movimientosUsuarios', $parametros, 'return');
        
    }
       
        
}

?>