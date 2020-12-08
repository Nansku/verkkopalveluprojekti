<div class="row">
    <div id="kissa" class="parallax col-12">
        <!-- Parallax otsikko
<div class="caption">
<span class="border">Kahvia rölöm</span>
</div> -->
    </div>

    <div id="design" class="text col-12">
        <h3>Selling quality coffee since 2020.
            <br>Our company is founded by people from all corners of Finland and
            we share a same passion for coffee.
            <br>We want to spread our shared love towards coffee for the entire world.</h3>
    </div>

    <div id="kettu" class="parallax col-12">

    </div>

    <div id="design" class="text col-12">
        <h3>Our recommended products:</h3>
        <div class="row d-flex justify-content-center">
            <div class="card-deck col-12">
                <?php foreach ($products as $product) : ?>
                    <div class="card mx-1">
                        <a href="<?= site_url('Coffee/product/' . $product['id']) ?>">
                            <h4><?= $product['productname'] ?></h4>
                            <p><?= $product['price'] ?> €</p>
                            <img class="img-fluid" src="<?= base_url('img/' . $product['picture']) ?>"></img>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div id="Sauli" class="parallax col-12">

    </div>
</div>
<button class="d-none d-lg-block" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up fa-2x"></i></button>