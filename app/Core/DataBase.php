<?php 

class DataBase{
    
    private $_db;
    private $_result;

    /**
	 * @AssociationType Usuario
	 * @AssociationKind Composition
	 */
	/**
	 * @access public
	 * Conexión a la base de datos.
	 */

    public function __construct(){
        try{
            $this->_db = new PDO('mysql: host=localhost; dbname=tu_plazoleta; charset=utf8','root',null);
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
                die($e->getMessage());
        }
    }

    public function consult($sql){
        $this->_result = $this->_db->prepare($sql);
    }

    public function execute(){
        try{
            return $this->_result->execute();
        }catch(Exception $e){
            die($e);
        }
    }

    public function bind($p,$v,$t){
        $this->_result->bindValue($p,$v,$t);
    }

    public function show(){
        return $this->_result->fetch(PDO::FETCH_OBJ);
    }

    public function lastId(){
        return $this->_db->lasInsertId();
    }

    public function showAll(){
        return $this->_result->fetchAll(PDO::FETCH_OBJ);
    }

    public function cantidadFilas(){
        $this->_result->rowCount();
    }
}
?>