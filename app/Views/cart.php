<div class="container" style="margin-bottom: 25em;">
    <div class="row footer_margin mt-2 cart">
        <div class="col">
            <form action="<?= site_url('Order/index') ?>" method="post">
                <h4>Shopping cart</h4>
                <table class="table col-12">
                    <?php $sum = 0; ?>
                    <!-- Products in cart -->
                    <?php foreach ($product as $products) : ?>
                        <tr>
                            <td>
                                <?= $products['productname'] ?>
                            </td>

                            <td>
                                <?= $products['price'] . ' €' ?>
                            </td>

                            <td>
                                <?= $products['amount'] ?>
                            </td>

                            <td>
                                <a class="cart_remove" href="<?= site_url('cart/remove/' . $products['id']) ?>">
                                    <i class="fas fa-minus-circle"></i> Delete product
                                </a>
                            </td>
                            <!-- LASKETAAN OSTOSKORIN SUMMA -->
                            <?php
                            $sum += $products['price'] * $products['amount'];
                            ?>
                        <?php endforeach ?>
                        </tr>

                        <tr>
                            <td></td>

                            <td>
                                <?php printf("%.2f €", $sum); ?>
                            </td>
                            <td></td>

                            <td>
                                <a id="clear" href="<?= site_url('cart/clear'); ?>">
                                    <i class="fas fa-trash"></i> Empty cart
                                </a>
                            </td>
                        </tr>
                </table>
                <button class="btn btn-warning">Continue</button>
            </form>
        </div>
    </div>
</div>