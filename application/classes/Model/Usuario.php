<?php
class Model_Usuario extends Kohana_Database_MySQL{
    
    public function __construct(&$oDbConn = null) {
        parent::__construct($oDbConn,array());
    }

    public function validarUsuario($usuario, $password){
        $parametros = array();
		$parametros['usuario'] = $usuario;
		$parametros['password'] = md5($password);
        return $this->exec('validarUsuario', $parametros, 'return');
        
    }
	
	  public function ListarUsuarios(){
        $parametros = array();
		
        return $this->exec('ListarUsuarios', $parametros, 'return');
        
    }
	
}

?>