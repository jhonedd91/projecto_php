<div class="container-fluid">
    <h1 class="display-4 text-center mb-5">Listado de productos</h1>
    <div class="row">
        <?php
            if(array_key_exists("products",$Data)){
                foreach ($Data["products"] as $key => $product) { ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <!-- <img class="card-img-top" src="" alt="Card image cap"> -->
                            <div class="card-body">
                                <h5 class="card-title"><?=$product->nombre?></h5>
                                <p class="card-text"><?=$product->descripcion?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Precio: <?=$product->precio?></li>
                                <li class="list-group-item">Cantidad : <?=$product->cantidad_contenido?></li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Restaurante</a>
                                <a href="#" class="card-link">Promociones</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
        ?>
    </div>
</div>