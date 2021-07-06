<?php 

class ProductosModel{


    protected $_conexion;

    function __construct(){
        try{
            $this->_conexion = new DataBase();

        }catch(Exception $e){
            die();
        }
    }

    public function showProducts(){
        try {
            $this->_conexion->consult("SELECT pd.id as idProduct,pd.* FROM `productos` pd LEFT JOIN galerias g on g.id = pd.galeria_id");
            $this->_conexion->execute();
            return $this->_conexion->showAll();
        } catch (Exception $e) {
            die($e);
        }
    }

    public function createProducts($data){
        try{
            $this->_conexion->consult("INSERT INTO `productos`(`nombre`, `tipo`, `precio`, `descripcion`, `cantidad_contenido`) VALUES 
            (:nombre,:tipo,:precio,:descripcion,:cantidad_contenido)");

            $this->_conexion->bind(":nombre",$data['nombre'],PDO::PARAM_STR);
            $this->_conexion->bind(":tipo",$data['tipo'],PDO::PARAM_STR);
            $this->_conexion->bind(":precio",$data['precio'],PDO::PARAM_STR);
            $this->_conexion->bind(":descripcion",$data['descripcion'],PDO::PARAM_STR);
            $this->_conexion->bind(":cantidad_contenido",$data['cantidad'],PDO::PARAM_INT);

            return $this->_conexion->execute();
        }catch(Exception $e){
            die($e);
        }
    }

    public function showDataByProductId($productId){
        try {
            $this->_conexion->consult("SELECT * FROM productos where id = :productId");
            $this->_conexion->bind(":productId",$productId,PDO::PARAM_STR);
            $this->_conexion->execute();
            return $this->_conexion->show();
        } catch (Exception $e) {
            die($e);
        }
    }

    public function editProduct($data){
        try{
            $this->_conexion->consult("UPDATE `productos` SET `nombre` = :nombre, `tipo` = :tipo, `precio` = :precio, 
             `descripcion` = :descripcion, `cantidad_contenido` = :cantidad_contenido WHERE `productos`.`id` = :productId;");

            $this->_conexion->bind(":nombre",$data['nombre'],PDO::PARAM_STR);
            $this->_conexion->bind(":tipo",$data['tipo'],PDO::PARAM_STR);
            $this->_conexion->bind(":precio",$data['precio'],PDO::PARAM_STR);
            $this->_conexion->bind(":descripcion",$data['descripcion'],PDO::PARAM_STR);
            $this->_conexion->bind(":cantidad_contenido",$data['cantidad'],PDO::PARAM_INT);
            $this->_conexion->bind(":productId",$data['productId'],PDO::PARAM_INT);

            return $this->_conexion->execute();
        }catch(Exception $e){
            die($e);
        }
    }

    public function deleteProductById($productId){
        try {
            $this->_conexion->consult("DELETE FROM productos where id = :productId");
            $this->_conexion->bind(":productId",$productId,PDO::PARAM_INT);
            return $this->_conexion->execute();
        } catch (Exception $e) {
            die($e);
        }
    }
}


?> 