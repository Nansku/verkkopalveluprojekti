<div>
<form action="<?= site_url('cart/add/' . $products['id']); ?>" method="post">
    <div class="product_color producti" id="product">
        <div class="d-flex justify-content-center">
            <div class=" card cards mt-5 mb-5" style="width: 1200px;">
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
    <div id="design" class="text col-12">
        <h3>More products:</h3>
        <div class="row d-flex justify-content-center">
            <div class="row">
            <?php foreach ($productrand as $product): ?>
                    <div class="recommended mx-1">
                        <a href="<?= site_url('Coffee/product/' . $product['id']) ?>">
                            <img class="img-fluid" src="<?= base_url('img/' . $product['picture']) ?>"></img>
                            <h4 class="mt-2" ><?= $product['productname'] ?></h4>
                            <div class="container">
                                <div class="row justify-content-center">   
                                        <p class="mt-2 justify-content-center"><?= $product['price'] ?> €</p>    
                                </div>   
                            </div>                     
                        </a>
                    </div>       
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</form>
</div>