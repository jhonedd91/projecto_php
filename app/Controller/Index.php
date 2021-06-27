<?php 
class Index extends Controller{

    function __construct(){
        parent::extendModel('IndexModel');
    }
    
    public function init(){
        if(!empty($_SESSION)){
            // var_dump(RUTA_URL.''.$_SESSION["rol"]["rolName"].'/init');die();
            header('Location: '.RUTA_URL.''.$_SESSION["rol"]["rolName"].'/init');
        }else{
            parent::view('Index');
        }
    }

    public function log_in(){
        $user = $this->model->verifyUser($_POST['userName']);
        $data = [];

        if(!$user){
            $data["message"] = "El usuario ingresado no existe";
            parent::view('Index',$data);
        }else{
            if(password_verify($_POST['password'],$user->contraseña)){
                session_start();
                $_SESSION["rol"] = [
                    "rolName" => $user->rol,
                    "userData" => $user
                ];

                header('Location: '.RUTA_URL.''.$user->rol.'/init');

            }else{
                $data["message"] = "Contraseña incorrecta";
                parent::view('Index',$data);
            } 
        }
    }
    
    public function log_out(){
        session_destroy();
        parent::view('Index');
    }
}
?>