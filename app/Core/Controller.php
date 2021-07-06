<?php 

class Controller{
    
    protected $modelo;

    public function _construct(){

    }

    public function view($view,$Data=[]){
        if(file_exists('../app/View/'.$view.'.php')){
            require_once('../app/View/Structure/header.php');
            require_once('../app/View/'.$view.'.php');
            require_once('../app/View/Structure/footer.php');
        }
    }

    public function viewUser($view,$Data=[]){
        if(file_exists('../app/View/Usuario/'.$view.'.php')){
            require_once('../app/View/Structure/header.php');
            require_once('../app/View/Structure/navUser.php');
            require_once('../app/View/Usuario/'.$view.'.php');
            require_once('../app/View/Structure/footer.php');
        }
    }

    public function viewAdmin($view,$Data=[]){
        if(file_exists('../app/View/Administrador/'.$view.'.php')){
            require_once('../app/View/Structure/header.php');
            require_once('../app/View/Structure/navUser.php');
            require_once('../app/View/Administrador/'.$view.'.php');
            require_once('../app/View/Structure/footer.php');
        }
    }

    public function generalView($folderName,$viewName,$Data=[]){
        if(file_exists('../app/View/'.$folderName.'/'.$viewName.'.php')){
            require_once('../app/View/Structure/header.php');
            require_once('../app/View/Structure/navUser.php');
            require_once('../app/View/'.$folderName.'/'.$viewName.'.php');
            require_once('../app/View/Structure/footer.php');
        }else{
            echo "View : (".$viewName.") Not Found in folder : (".$folderName.")";
        }
    }

    /*public function viewCabecera($Cabecera, $Cuerpo, $Data=[], $Data2=[]) {

		if (file_exists('../app/View/' . $Cuerpo . '.php')) {
			if(isset($_SESSION[$Cabecera])){
				require_once( '../app/View/Structure/header.php');
				require_once( '../app/View/' . $Cabecera .'/'. $Cabecera . '.php');
				require_once( '../app/View/' . $Cuerpo . '.php');
				require_once( '../app/View/Structure/footer.php');
			}
			else{
                echo "Error";
				// header('Location: '.RUTA_URL.'index/init');
			}
	
		}
	}*/
	
    public function model($model){
        if (file_exists('../app/Model/' . $model .'.php')) {
			require_once ('../app/Model/'. $model .'.php');
			return new $model();
		}else{
            echo 'file no exist';
        }
    }

    function extendModel($model){
        $this->model = $this->model($model);
    }
}
?>