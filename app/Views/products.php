<div class="row">
<?php foreach ($products as $product): ?>
         <div class="card container">
            <div class="col-12">
            <h4><?= $product['productname'] ?></h4>
            <p><?=$product['description']?></p>
            <p><?=$product['price']?> €</p>
            <img src="<?= base_url('img/' . $product['picture'])?>"></img>
            </div>
        </div>
<?php endforeach; ?>
</div>