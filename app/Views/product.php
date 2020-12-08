<div style="margin-bottom: 10em;">
<form action="<?= site_url('cart/add/' . $products['id']); ?>" method="post">
    <div class="product_color" id="product">
        <div class="d-flex justify-content-center">
            <div class=" card mt-5 mb-5" style="width: 1200px;">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-12 card-body">
                        <img class="float-right mr-4 kaka" id="zoom_05" src="<?= base_url('img/' . $products['picture']) ?>" data-zoom-image="<?= base_url('img/large/' . $products['picture']) ?>" />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 card-body">
                        <h3><?= $products['productname'] ?></h3>
                        <p class="description "><?= $products['description'] ?></p>
                        <h4><?= $products['price'] ?> €</h4>
                        <button class="btn nappula shadow-none mt-2"> <i class="fas fa-shopping-cart mr-2"></i>Lisää koriin</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="card-deck col-12">
            <?php foreach ($productrand as $product): ?>
                <div class="card mx-1">
                <a href="<?= site_url('/coffee/product/' . $product['id'])?>">
                        <h4><?= $product['productname'] ?></h4>
                        <p><?= $product['price'] ?> €</p>
                        <img class="img-fluid" src="<?= base_url('img/' . $product['picture']) ?>"></img>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</form>
</div>