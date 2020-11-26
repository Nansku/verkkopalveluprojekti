<?php shuffle($products);
foreach ($products as $product): ?>
<div class=" d-flex justify-content-center">
         <div class="card mt-4 mb-4" style="width: 1200px;">
            <div class="row no-gutters id1">
               <div class="col-8 card-body">
                  <h4 class="card-title"><?= $product['productname'] ?></h4>
                  </a>
                     <p class="card-text"><?=$product['description']?></p>
                     <p class="card-text"><?=$product['price']?> €</p>

               </div>
               <div class="col-4">
                  <div class="float-right">
                     <img class="card-img" src="<?= base_url('img/' . $product['picture'])?>"></img>
                     </a>
                  </div>
               </div> 
            </div>      
         </div>
      </div>
      <?php endforeach; ?>