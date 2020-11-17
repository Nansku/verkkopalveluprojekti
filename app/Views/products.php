<?php foreach ($products as $product): ?>
   <h4><?= $product['productname'] ?></h4>
<?php endforeach; ?>


<?php /*
foreach ($products as $product) {
   if ($product['productID'] % 2 === 0) {
   echo '<div class="row">
      <div class="card mb-3" style="max-width: 540px;">
         <div class="row no-gutters">
            <div class="col-md-4">
               <i class="fas fa-mug-hot fa-6x"></i>
               <!-- <img src="" class="card-img" alt=""> -->
            </div>
            <div class="col-md-8">
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
      echo '<div class="row">
      <div class="card mb-3" style="max-width: 540px;">
         <div class="row no-gutters">
            <div class="col-md-8">
               <div class="card-body">
                  <h5 class="card-title">' . $product['productname'] . '</h5>
                  <p class="card-text">' . $product['description'] . '</p>
                  <p class="card-text">' . $product['price'] . '</p>
               </div>
            </div>
            <div class="col-md-4">
               <i class="fas fa-mug-hot fa-6x"></i>
               <!-- <img src="" class="card-img" alt=""> -->
            </div>
         </div>
      </div>
   </div>';
   }
} */
?>