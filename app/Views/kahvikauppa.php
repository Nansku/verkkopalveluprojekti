<div id="kissa" class="parallax">
    <!-- Parallax otsikko
<div class="caption">
<span class="border">Kahvia rölöm</span>
</div> -->
</div>

<div id="design" class="text">
    <h3>Selling quality coffee since 2020.
        <br>Our company is founded by people from all corners of Finland and
        we share a same passion for coffee.
        <br>We want to spread our shared love towards coffee for the entire world.</h3>
</div>

<div id="kettu" class="parallax">

</div>

<div id="design" class="text">
    <h3>Our recommended products:</h3>
    <div class="row d-flex justify-content-center">
        <div class="card-deck">
        <?php foreach($products as $product): ?>
            <div class="card col-lg-4 mx-1">
                <a href="<?= site_url('Coffee/product/' . $product['id'])?>">
                <h4><?= $product['productname'] ?></h4>
                <p><?= $product['price'] ?> €</p>
                <img src="<?=base_url('img/' . $product['picture']) ?>"></img>
            </a>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</div>

<div id="Sauli" class="parallax">

</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up fa-2x"></i></button>