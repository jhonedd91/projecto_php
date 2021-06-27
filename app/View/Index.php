<div class="container-fluid parent_div">
<form action="<?=RUTA_URL?>index/log_in" method="POST" id="form_login">
    
    <?php
        if(!is_null($Data)){
            if(array_key_exists("message",$Data)){
                echo '<div class="alert alert-danger" role="alert">'.$Data["message"].'</div>';
            }
        }
    ?>
    
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre usuario</label>
    <input type="text" class="form-control" id="userName" name="userName" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>