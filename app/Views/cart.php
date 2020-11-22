<div class="row">
    <div class="col">
        <h4>Shopping cart</h4>
        <table class="table">
            <?php $sum = 0; ?>
            <!-- Products in cart -->
            <?php foreach ($product as $products): ?>
            <tr>
                <td>
                    <?= $products['productname'] ?>
                </td>

                <td>
                    <?= $products['price'] . ' €'?>
                </td>

                <td>
                    <?= $products['amount'] ?>
                </td>

                <td>
                    <a class="cart_remove" href="<?= site_url('cart/remove/' . $products['productID'])?>">
                        <i class="fas fa-minus-circle"></i>
                    </a>
                </td>
                <?php endforeach ?>
            </tr>

            <!-- Tässä lasketaan summa -->
            <?php
            $sum += $products['price']  * $products['amount'];
            ?>
            <tr>
                <td></td>
                <td><!-- Tähän tulostetaan summa -->
                <?php printf ("%.2f €", $sum);?>
                </td>
                <td></td>

                <td>
                    <a id="clear" href="<?= site_url('cart/clear');?>" >
                    <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        </table>

    </div>
</div>