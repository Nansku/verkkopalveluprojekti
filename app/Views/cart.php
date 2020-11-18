<div class="row">
    <div class="col">
        <h4>Shopping cart</h4>
        <table class="table">
            <?php foreach ($products as $product): ?>
            <tr>
                <td>
                    <?= $product['productname'] ?>
                </td>

                <td>
                    <?= $product['price'] . ' €'?>
                </td>

                <td>
                    <?= $product['amount'] ?>
                </td>

                <td>
                    <a class="cart_remove" href="<?= site_url('cart/remove/' . $product['id'])?>">
                        <i class="fas fa-minus-circle"></i>
                    </a>
                </td>
                <?php endforeach ?>
            </tr>

            <!-- Tässä lasketaan summa -->
            <tr>
                <td></td>
                <td><!-- Tähän tulostetaan summa --></td>
                <td></td>

                <td>
                    <a id="clear" href="#" >
                    <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        </table>

    </div>
</div>