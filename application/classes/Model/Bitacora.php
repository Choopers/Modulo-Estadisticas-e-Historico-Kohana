<?php
class Model_Bitacora extends Kohana_Database_MySQL{
    
    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn,array());
    }
	
	public function ingresarEventoUsuario($usuario, $evento){
		$parametros = array();
		$parametros['usuario'] = $usuario;
		$parametros['evento'] = $evento;
		$this->exec('ingresarEventoUsuario', $parametros,'none');
	}
     public function BuscarUsuario($usuario){
                $parametros = array();
		$parametros['usuario'] = $usuario;
        return $this->exec('buscaruser', $parametros, 'return');
        
    }
       
        
}

?>