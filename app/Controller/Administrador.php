<?php 
class Administrador extends Controller{

    function __construct(){
        parent::extendModel('AdministradorModel');
    }
    
    public function init(){
        echo "init admin";
    }
}
?>