<?php 


class AdministradorModel{


    protected $_conexion;

    function __construct(){
        try{
            $this->_conexion = new DataBase();

        }catch(Exception $e){
            die();
        }
    }
}


?> 