<?php 
class Productos extends Controller{

    function __construct(){
        parent::extendModel('ProductosModel');
        if(empty($_SESSION)){
            header('Location: '.RUTA_URL.'Index/init');
        }
    }
    
    public function viewProducts(){
        $data["products"] = $this->model->showProducts();
        parent::generalView("Productos","showProducts",$data);
    }

    public function managmentProducts(){
        $data["products"] = $this->model->showProducts();
        parent::generalView("Productos","managmentProducts",$data);
    }
    
    public function viewCreateProducts(){
        parent::generalView("Productos","addView");
    }

    public function saveProductAction(){
        $this->model->createProducts($_POST);
        header('Location: '.RUTA_URL.'Productos/managmentProducts');
    }

    public function viewEditProduct($idProduct){
        $data["idProduct"] = $idProduct;
        $data["productInfo"] = $this->model->showDataByProductId($idProduct);
        
        parent::generalView("Productos","editView",$data);
    }

    public function editProductAction(){
        $this->model->editProduct($_POST);
        header('Location: '.RUTA_URL.'Productos/managmentProducts');
    }

    public function deleteProduct($productId){
        $this->model->deleteProductById($productId);
    }
}
?>