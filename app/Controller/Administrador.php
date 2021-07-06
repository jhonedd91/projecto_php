<?php 
class Administrador extends Controller{

    function __construct(){
        parent::extendModel('AdministradorModel');
        if(!empty($_SESSION)){
            if($_SESSION["rol"]["rolName"] != "Administrador"){
                header('Location: '.RUTA_URL.''.$_SESSION["rol"]["rolName"].'/init');
            }
        }else if(empty($_SESSION)){
            header('Location: '.RUTA_URL.'Index/init');
        }
    }
    
    public function init(){
        parent::viewAdmin("Index");
    }
}
?>