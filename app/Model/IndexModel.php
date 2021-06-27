<?php 


class IndexModel{


    protected $_conexion;

    function __construct(){
        try{
            $this->_conexion = new DataBase();

        }catch(Exception $e){
            die();
        }
    }
	
	public function verifyUser($nombreUsuario){
        try {
            $this->_conexion->consult("select * from usuarios us 
            JOIN roles r on us.rol_id = r.id where us.nombre_usuario = :nombreUsuario ");
            $this->_conexion->bind(":nombreUsuario",$nombreUsuario,PDO::PARAM_STR);
            $this->_conexion->execute();
            return $this->_conexion->show();
        } catch (Exception $e) {
            die($e);
        }
    }
}


?> 