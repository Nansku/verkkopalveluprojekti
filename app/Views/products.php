<div>
   <?php foreach ($products as $product): ?>
         <div class="row id1">
            <div class="col">
               <h4><?= $product['productname'] ?></h4>
                  <p><?=$product['description']?></p>
                  <p><?=$product['price']?> €</p>
            </div>
            <div class="col">
               <div class="float-right">
                  <img src="<?= base_url('img/' . $product['picture'])?>"></img>
               </div>
            </div>       
        </div>
   <?php endforeach; ?>
</div>