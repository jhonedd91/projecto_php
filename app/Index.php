<?php 

    require_once 'Configuration/configuration.php';
    require_once 'Model/IndexModel.php';
    spl_autoload_register(function($nombre){
       
        require_once '../app/Core/'.$nombre.'.php';
    });


?>