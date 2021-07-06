<div class="container-fluid">
    <h1 class="display-4 text-center mb-5">Editar producto</h1>
    <form action="<?=RUTA_URL?>Productos/editProductAction" method="POST">
    <input type="hidden" value="<?= $Data["idProduct"]?>" name="productId">
        <div class="row justify-content-md-center mt-3 ml-5">
            <div class="col">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre producto" value="<?= $Data["productInfo"]->nombre?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" name="tipo" placeholder="Tipo producto" value="<?= $Data["productInfo"]->tipo?>">
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3 ml-5">
            <div class="col">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" name="precio" placeholder="Precio producto" value="<?= $Data["productInfo"]->precio?>">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad producto" value="<?= $Data["productInfo"]->cantidad_contenido?>">
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3 ml-5">
            <div class="col">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion"><?= $Data["productInfo"]->descripcion?></textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3 ml-5 text-center">
            <a href="<?=RUTA_URL?>Productos/managmentProducts" class="btn btn-danger mr-2">Volver</a>
            <input class="btn btn-success" type="submit" value="Guardar">
        </div>
    </form>
</div>