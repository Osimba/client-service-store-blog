<?php include("includes/public_header.php"); ?>

<ul class="store-nav">
    <?php $this->get_data('page_nav'); ?>
</ul>

<div class="secondarynav">
    <strong><?php 
        $items = $this->get_data('cart_total_items', FALSE);
        $price = $this->get_data('cart_total_cost', FALSE);
        if ($items == 1) {
            echo $items . ' item ($' . $price . ') in cart';
        }
        else {
            echo $items . ' items ($' . $price . ') in cart';
        }
    ?></strong> &nbsp;| &nbsp;
    <a href="<?php echo SITE_PATH; ?>cart.php">Shopping Cart</a>
</div>

<div class="<?php $this->get_data('page_class'); ?>">
    <div id="content">
        <h2>Shopping Cart</h2>

        <ul class="alerts">
            <?php $this->get_alerts(); ?>
        </ul>

        <form action="" method="post">
            <ul class="cart">
                <?php $this->get_data('cart_rows'); ?>
            </ul>

            <div class="buttons_row">
                <a class="button_alt" href="?empty">Empty Cart</a>
                <input type="submit" name="update" class="button_alt" value="Update Cart">
            </div>
        </form>

        <?php
        $items = $this->get_data('cart_total_items', FALSE);
        if ($items > 0) { ?>
            <form action="" method="post">
                <div class="submit_row">
                    <input type="submit" name="submit" class="button" value="Pay with PayPal">
                </div>
            </form>
        <?php } ?>

    </div>
</div>

<?php include("includes/public_footer.php"); ?>