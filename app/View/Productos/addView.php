<div class="container-fluid">
    <h1 class="display-4 text-center mb-5">Crear producto</h1>
    <form action="<?=RUTA_URL?>Productos/saveProductAction" method="POST">
        <div class="row justify-content-md-center mt-3 ml-5">
            <div class="col">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre producto" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" name="tipo" placeholder="Tipo producto" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3 ml-5">
            <div class="col">
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" name="precio" placeholder="Precio producto" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad producto" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3 ml-5">
            <div class="col">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" required></textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center mt-3 ml-5 text-center">
            <a href="<?=RUTA_URL?>Productos/managmentProducts" class="btn btn-danger mr-2">Volver</a>
            <input class="btn btn-success" type="submit" value="Guardar">
        </div>
    </form>
</div>