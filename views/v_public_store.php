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
        <h2> <?php $this->get_data('page_title'); ?></h2>

        <ul class="alerts">
            <?php $this->get_alerts(); ?>
        </ul>

        <p><?php $this->get_data('header'); ?></p>

        <ul class="products">
            <?php $this->get_data('products'); ?>
        </ul>
    </div>
</div>

<?php include("includes/public_footer.php"); ?>
