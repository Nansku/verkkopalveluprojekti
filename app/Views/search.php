<h3>Your Search Results:</h3>
   <?php foreach ($products as $product): ?> 
      <div class=" d-flex justify-content-center">
         <div class="card mt-4 mb-4" style="width: 1200px;">
            <div class="row no-gutters id1">
               <div class="col-8 card-body">
                  <!-- Linkki vie yksittäisen tuotteen sivulle -->
                  <a href="<?= site_url('/coffee/product/' . $product['productID'])?>">
                  <h4 class="card-title"><?= $product['productname'] ?></h4>
                  </a>
                     <p class="card-text"><?=$product['description']?></p>
                     <p class="card-text"><?=$product['price']?> €</p>
               <!-- Form lisää tuotteen ostoskoriin 
               <form action="<?= site_url('cart/add2/' . $product['productID']);?>" method="post">
                     <button class="btn nappula shadow-none"> <i class="fas fa-shopping-cart mr-2"></i>Lisää koriin</button>
               -->
               </div>
               <div class="col-4">
                  <div class="float-right">
                     <a href="<?= site_url('/coffee/product/' . $product['productID'])?>">
                     <img class="card-img" src="<?= base_url('img/' . $product['picture'])?>"></img>
                     </a>
                  </div>
               </div> 
            </div>      
         </div>
      </div>
   <?php endforeach; ?>

