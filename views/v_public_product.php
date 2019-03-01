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
        
        <img src="<?php $this->get_data('prod_image'); ?>" alt="<?php $this->get_data('prod_name'); ?>" class="product_image">
        <h2><?php $this->get_data('prod_name'); ?></h2>
        <div class="price"><?php $this->get_data('prod_price'); ?></div>
        <div class="description"><?php $this->get_data('prod_description'); ?></div>

        <a href="cart.php?id=<?php $this->get_data('prod_id'); ?>" class="button">Add to cart</a>
    </div>
</div>

<?php include("includes/public_footer.php"); ?>