<form action="<?= site_url('cart/add/' . $products['productID']);?>" method="post">
<div class="product_color container">
    <div class=" d-flex justify-content-center">
        <div class="mt-5 mb-5" style="width: 1200px;">
            <div class="row no-gutters mt-5 mb-5">

                    <div class="col-6">
                        <img class="float-right mr-4" id="zoom_05" src="<?= base_url('img/' . $products['picture']) ?>" 
                        data-zoom-image="<?= base_url('img/large/' . $products['picture']) ?>"/>
                    </div>
                    <div class="col-6">
                    <h3><?= $products['productname'] ?></h3>
                    <p class="description "><?= $products['description'] ?></p>
                    <h4><?= $products['price'] ?> €</h4>
                    <button class="btn nappula shadow-none mt-2"> <i class="fas fa-shopping-cart mr-2"></i>Lisää koriin</button>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
</form>