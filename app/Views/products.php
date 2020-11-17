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

 
   <!-- foreach ($products as $product) {
   if ($product['productID'] % 2 === 0) {
   echo '<div class="row tuote">
      <div class="card mb-3">
         <div class="row">
            <div class="col-md-12">
               <i class="fas fa-mug-hot fa-6x"></i>
                <img src="" class="card-img" alt=""> 
            </div>
            <div class="col-md-12">
               <div class="card-body">
                  <h5 class="card-title">' . $product['productname'] . '</h5>
                  <p class="card-text">' . $product['description'] . '</p>
                  <p class="card-text">' . $product['price'] . '</p>
               </div>
            </div>
         </div>
      </div>
   </div>';
   } else {
      echo '<div class="row tuote">
      <div class="card mb-3">
         <div class="row">
            <div class="col-md-12">
               <div class="card-body">
                  <h5 class="card-title">' . $product['productname'] . '</h5>
                  <p class="card-text">' . $product['description'] . '</p>
                  <p class="card-text">' . $product['price'] . '</p>
               </div>
            </div>
            <div class="col-md-12">
               <i class="fas fa-mug-hot fa-6x"></i>
                <img src="" class="card-img" alt="">
            </div>
         </div>
      </div>
   </div>'; 
   }
} -->
