
<div class="product_color">
   <?php foreach ($products as $product): ?> 
      <div class=" d-flex justify-content-center">
         <div class="card cards mx-2 mt-4 mb-4" style="width: 1200px;">
            <div class="row no-gutters id1">
               <div class="col-lg-8 col-md-12 card-body">
                  <!-- Linkki vie yksittäisen tuotteen sivulle -->
                  <a href="<?= site_url('/coffee/product/' . $product['id'])?>">
                  <h4 class="card-title"><?= $product['productname'] ?></h4>
                  </a>
                     <p class="card-text d-none d-md-block"><?=$product['description']?></p>
                     <p class="card-text"><?=$product['price']?> €</p>
               <!-- Form lisää tuotteen ostoskoriin 
               <form action="<?= site_url('cart/add2/' . $product['id']);?>" method="post">
                     <button class="btn nappula shadow-none"> <i class="fas fa-shopping-cart mr-2"></i>Lisää koriin</button>
               -->
               </div>
               <div class="col-lg-4">
                  <div class="float-right">
                     <a href="<?= site_url('/coffee/product/' . $product['id'])?>">
                     <img class="card-img" src="<?= base_url('img/' . $product['picture'])?>"></img>
                     </a>
                  </div>
               </div> 
            </div>      
         </div>
      </div>
   <!-- </form> -->
   <?php endforeach; ?>
      <!-- scroll up button -->
   <button class="d-none d-lg-block" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up fa-2x"></i></button>
</div>
