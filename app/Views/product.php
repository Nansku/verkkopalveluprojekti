<div class="product_color">
    <div class=" d-flex justify-content-center">
        <div class="card mt-4 mb-4" style="width: 1200px;">
            <div class="row no-gutters id1">
                <div class="col-8 card-body">
                    <h4 class="card-title"><?= $products['productname'] ?></h4>
                    <p class="card-text"><?= $products['description'] ?></p>
                    <p class="card-text"><?= $products['price'] ?> €</p>
                    <button class="btn nappula shadow-none"> <i class="fas fa-shopping-cart mr-2"></i>Lisää koriin</button>
                </div>
                <div class="col-4">
                    <div class="float-right">
                        <img class="card-img" src="<?= base_url('img/' . $products['picture']) ?>"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>