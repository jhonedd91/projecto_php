<div class="container-fluid">
    <h1 class="display-4 text-center mb-5">Administración de productos</h1>
    <div class="row container-fluid mb-3">
        <div class="float-left">
            <a href="<?=RUTA_URL?>Productos/viewCreateProducts" class="btn btn-primary">Crear producto</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped" id="dt_products">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(array_key_exists("products",$Data)){
                        foreach ($Data["products"] as $key => $product) { ?>
                        <tr>
                            <td><?= $product->nombre ?></td>
                            <td><?= $product->tipo ?></td>
                            <td><?= $product->precio ?></td>
                            <td><?= $product->descripcion?></td>
                            <td><?= $product->cantidad_contenido ?></td>
                            <td>
                            <div class="dropdown show">
                                <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?=RUTA_URL?>Productos/viewEditProduct/<?=$product->idProduct?>">Editar</a>
                                    <a class="dropdown-item" onclick="deleteProduct(<?=$product->idProduct?>)">Eliminar</a>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>