<?php 
class Usuario extends Controller{

    function __construct(){
        parent::extendModel('UsuarioModel');
        if(!empty($_SESSION)){
            if($_SESSION["rol"]["rolName"] != "Usuario"){
                header('Location: '.RUTA_URL.''.$_SESSION["rol"]["rolName"].'/init');
            }
        }else if(empty($_SESSION)){
            header('Location: '.RUTA_URL.'Index/init');
        }
    }
    
    public function init(){
        parent::viewUser("Index");
    }
}
?>