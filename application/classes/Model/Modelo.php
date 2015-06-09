<?php
class Model_Modelo extends Kohana_Database_MySQL{
    
    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn,array());
    }

    public function getMensajedia(){
        $parametros = array();
		$parametros['fecha'] = '2014-10-13';
        return $this->exec('getMensajedia', $parametros, 'return');
        
    }
    
	public function otraquery(){
		return $this->exec('otraConsulta', array(), 'return');
	}
}

?>